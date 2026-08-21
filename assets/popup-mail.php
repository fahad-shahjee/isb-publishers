<?php

    require_once __DIR__ . '/../db-config.php';
    require_once __DIR__ . '/../mail-helper.php';

    // Only process POST reqeusts.

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Honeypot: a hidden field real visitors never see or fill in. If it's
        // non-empty, a bot filled it in — pretend success and discard silently.

        if (!empty($_POST["website"] ?? "")) {

            http_response_code(200);

            echo "Thank You! We'll be in touch shortly.";

            exit;

        }

        // Get the form fields and remove whitespace.

        $name = strip_tags(trim($_POST["name"] ?? ""));

        $name = str_replace(array("\r","\n"),array(" "," "),$name);

        $email = filter_var(trim($_POST["email"] ?? ""), FILTER_SANITIZE_EMAIL);

        $phone = strip_tags(trim($_POST["phone"] ?? ""));

        $phone = str_replace(array("\r","\n"),array(" "," "),$phone);

        $service = strip_tags(trim($_POST["service"] ?? ""));

        $service = str_replace(array("\r","\n"),array(" "," "),$service);

        $message = trim($_POST["message"] ?? "");



        // Check that data was sent to the mailer.

        if ( empty($name) OR empty($phone) OR empty($service) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // Set a 400 (bad request) response code and exit.

            http_response_code(400);

            echo "Please complete the form and try again.";

            exit;

        }



        // Save the submission to the database first, so it's kept even if the

        // email below fails to send or gets marked as spam.

        $db_saved = false;

        $conn = get_db_connection();

        if ($conn !== null) {

            $stmt = $conn->prepare(

                "INSERT INTO popup_leads (name, email, phone, service, message) VALUES (?, ?, ?, ?, ?)"

            );

            $stmt->bind_param("sssss", $name, $email, $phone, $service, $message);

            $db_saved = $stmt->execute();

            $stmt->close();

            $conn->close();

        }



        // Set the recipient email address.

        $recipient = "info@isbghostwriters.com";



        // Set the email subject.

        $email_subject = "New quick call request: $service";



        // Build the email content.

        $email_content = "New popup form submission from isbghostwriters.com\n\n";

        $email_content .= "Name: $name\n";

        $email_content .= "Email: $email\n\n";

        $email_content .= "Service: $service\n\n";

        $email_content .= "Phone: $phone\n\n";

        $email_content .= "Message:\n$message\n";



        // Send the email — best-effort, via authenticated SMTP through the real

        // noreply@ mailbox. The submission is already saved above, so a

        // failed/blocked send doesn't lose the lead.

        $mail_sent = send_site_email($recipient, $email_subject, $email_content, $name, $email);

        if ($db_saved OR $mail_sent) {

            // Set a 200 (okay) response code.

            http_response_code(200);

            echo "Thank You! We'll be in touch shortly.";

        } else {

            // Set a 500 (internal server error) response code.

            http_response_code(500);

            echo "Oops! Something went wrong and we couldn't send your message.";

        }



    } else {

        // Not a POST request, set a 403 (forbidden) response code.

        http_response_code(403);

        echo "There was a problem with your submission, please try again.";

    }

?>

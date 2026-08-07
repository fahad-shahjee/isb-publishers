<?php

    require_once __DIR__ . '/../db-config.php';

    // Only process POST reqeusts.

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Get the form fields and remove MORALspace.

        $name = strip_tags(trim($_POST["name"] ?? ""));

		$name = str_replace(array("\r","\n"),array(" "," "),$name);

        $email = filter_var(trim($_POST["email"] ?? ""), FILTER_SANITIZE_EMAIL);

        $subject = strip_tags(trim($_POST["Subject"] ?? ""));

        $subject = str_replace(array("\r","\n"),array(" "," "),$subject);

        $phone = strip_tags(trim($_POST["phone"] ?? ""));

        $phone = str_replace(array("\r","\n"),array(" "," "),$phone);

        $message = trim($_POST["message"] ?? "");



        // Check that data was sent to the mailer.

        if ( empty($name) OR empty($phone) OR empty($subject) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {

            header("Location: ../contact.php?status=error");

            exit;

        }



        // Save the submission to the database first, so it's kept even if the

        // email below fails to send or gets marked as spam.

        $db_saved = false;

        $conn = get_db_connection();

        if ($conn !== null) {

            $stmt = $conn->prepare(

                "INSERT INTO contact_submissions (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)"

            );

            $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

            $db_saved = $stmt->execute();

            $stmt->close();

            $conn->close();

        }



        // Set the recipient email address.

        $recipient = "info@isbghostwriters.com";



        // Set the email subject.

        $email_subject = "New contact form message: $subject";



        // Build the email content.

        $email_content = "New contact form submission from isbghostwriters.com\n\n";

        $email_content .= "Name: $name\n";

        $email_content .= "Email: $email\n\n";

        $email_content .= "Subject: $subject\n\n";

        $email_content .= "Phone: $phone\n\n";

        $email_content .= "Message:\n$message\n";



        // Build the email headers.

        // Use a From address on our own domain (many mail servers reject/spam-flag

        // mail() calls whose From doesn't match the sending domain), and put the

        // visitor's address in Reply-To so replying still goes to them.

        $email_headers = "From: ISB Ghostwriters Website <noreply@isbghostwriters.com>\r\n";

        $email_headers .= "Reply-To: $name <$email>\r\n";

        $email_headers .= "MIME-Version: 1.0\r\n";

        $email_headers .= "Content-Type: text/plain; charset=UTF-8";



        // Send the email — best-effort. The submission is already saved above,

        // so a failed/blocked send doesn't lose the lead.

        $mail_sent = mail($recipient, $email_subject, $email_content, $email_headers);

        if ($db_saved OR $mail_sent) {

            header("Location: ../contact.php?status=success");

        } else {

            header("Location: ../contact.php?status=error");

        }

        exit;



    } else {

        header("Location: ../contact.php?status=error");

        exit;

    }

?>

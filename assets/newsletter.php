<?php

    require_once __DIR__ . '/../db-config.php';

    // Only process POST requests.

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Honeypot: a hidden field real visitors never see or fill in. If it's
        // non-empty, a bot filled it in — pretend success and discard silently.

        if (!empty($_POST["website"] ?? "")) {

            http_response_code(200);

            echo "Thanks for subscribing!";

            exit;

        }

        $email = filter_var(trim($_POST["email"] ?? ""), FILTER_SANITIZE_EMAIL);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            http_response_code(400);

            echo "Please enter a valid email address.";

            exit;

        }

        $conn = get_db_connection();

        if ($conn === null) {

            http_response_code(500);

            echo "Oops! Something went wrong, please try again later.";

            exit;

        }

        $stmt = $conn->prepare("INSERT INTO newsletter_subscribers (email) VALUES (?)");

        $stmt->bind_param("s", $email);

        try {

            $stmt->execute();

            http_response_code(200);

            echo "Thanks for subscribing!";

        } catch (mysqli_sql_exception $e) {

            if ($e->getCode() === 1062) {

                // Duplicate email (UNIQUE constraint) — treat as a friendly success.

                http_response_code(200);

                echo "You're already subscribed!";

            } else {

                error_log('Newsletter insert failed: ' . $e->getMessage());

                http_response_code(500);

                echo "Oops! Something went wrong, please try again later.";

            }

        }

        $stmt->close();

        $conn->close();

    } else {

        http_response_code(403);

        echo "There was a problem with your submission, please try again.";

    }

?>

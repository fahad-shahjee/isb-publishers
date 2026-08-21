<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/smtp-config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

/**
 * Send an email via authenticated SMTP using the site's noreply@ mailbox.
 *
 * @param string $toEmail      Recipient address (the business inbox, e.g. info@isbghostwriters.com).
 * @param string $subject      Email subject line.
 * @param string $body         Plain-text email body.
 * @param string $replyToName  Name to show in the Reply-To header (usually the visitor's name).
 * @param string $replyToEmail Address to show in the Reply-To header (usually the visitor's email).
 * @return bool True on success, false on failure (errors are logged, never thrown to the caller).
 */
function send_site_email(string $toEmail, string $subject, string $body, string $replyToName, string $replyToEmail): bool
{
    global $SMTP_HOST, $SMTP_PORT, $SMTP_ENCRYPTION, $SMTP_USERNAME, $SMTP_PASSWORD, $SMTP_FROM_EMAIL, $SMTP_FROM_NAME;

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = $SMTP_HOST;
        $mail->Port = $SMTP_PORT;
        $mail->SMTPSecure = $SMTP_ENCRYPTION;
        $mail->SMTPAuth = true;
        $mail->Username = $SMTP_USERNAME;
        $mail->Password = $SMTP_PASSWORD;

        $mail->setFrom($SMTP_FROM_EMAIL, $SMTP_FROM_NAME);
        $mail->addAddress($toEmail);
        $mail->addReplyTo($replyToEmail, $replyToName);

        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->isHTML(false);

        $mail->send();
        return true;
    } catch (PHPMailerException $e) {
        error_log('SMTP send failed: ' . $mail->ErrorInfo);
        return false;
    }
}

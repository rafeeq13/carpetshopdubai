<?php
// Show errors for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = htmlspecialchars(trim($_POST['username']));
    $email    = htmlspecialchars(trim($_POST['email']));
    $subject  = htmlspecialchars(trim($_POST['subject']));
    $message  = htmlspecialchars(trim($_POST['message']));

    // Validate required fields
    if (empty($username) || empty($email) || empty($subject) || empty($message)) {
        die("<h2 style='color:red;text-align:center;'>All fields are required.</h2>");
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'carpetscurtains@gmail.com'; // Your Gmail
        $mail->Password   = 'mqitquycwjpofgfa';          // Gmail App Password
        $mail->SMTPSecure = 'tls';                       // TLS encryption
        $mail->Port       = 587;                         // TLS port

        // Email headers
        $mail->setFrom('carpetscurtains@gmail.com', 'Carpet Shop Dubai');
        
        // Recipients
        $recipients = ['carpetscurtains@gmail.com', 'rkc2050@gmail.com', 'info@carpetshopdubai.com'];
        foreach ($recipients as $recipient) {
            $mail->addAddress($recipient);
        }

        // Allow replies to the customer's email
        $mail->addReplyTo($email, $username);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Enquiry from $username";
        $mail->Body    = "
            <div style='font-family: Arial, sans-serif; padding: 20px; background: #f9f9f9; border: 1px solid #ddd; border-radius: 8px;'>
                <h2 style='color: #428bca;'>New Enquiry Received</h2>
                <p><strong>Name:</strong> {$username}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Phone Number:</strong> {$subject}</p>
                <p><strong>Message:</strong></p>
                <p style='background:#fff;padding:10px;border:1px solid #ddd;border-radius:5px;'>{$message}</p>
                <hr>
                <p style='color:#555;'>This message was sent from <strong>Carpet Shop Dubai</strong> website.</p>
            </div>
        ";
        $mail->AltBody = "Name: $username\nEmail: $email\nPhone: $subject\nMessage: $message";

        // Send email
        if ($mail->send()) {
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Thank You</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background: #f4f4f4;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                        margin: 0;
                    }
                    .thank-you-container {
                        background: #fff;
                        padding: 30px;
                        text-align: center;
                        border-radius: 12px;
                        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                        max-width: 500px;
                        width: 90%;
                    }
                    .thank-you-container h2 {
                        color: #4CAF50;
                        font-size: 26px;
                        margin-bottom: 15px;
                    }
                    .thank-you-container p {
                        color: #555;
                        font-size: 16px;
                    }
                    .loader {
                        margin: 20px auto;
                        border: 6px solid #f3f3f3;
                        border-top: 6px solid #428bca;
                        border-radius: 50%;
                        width: 40px;
                        height: 40px;
                        animation: spin 1s linear infinite;
                    }
                    @keyframes spin {
                        0% { transform: rotate(0deg); }
                        100% { transform: rotate(360deg); }
                    }
                </style>
                <meta http-equiv="refresh" content="5;url=index.php">
            </head>
            <body>
                <div class="thank-you-container">
                    <h2>Thank You!</h2>
                    <p>Your enquiry has been sent successfully. We will contact you soon.</p>
                    <div class="loader"></div>
                    <p>You will be redirected to the homepage in a few seconds...</p>
                </div>
            </body>
            </html>
            <?php
        } else {
            echo "<h2 style='text-align:center; color:red;'>Email could not be sent. Please try again later.</h2>";
        }

    } catch (Exception $e) {
        echo "<h2 style='text-align:center; color:red;'>Error: {$mail->ErrorInfo}</h2>";
    }
} else {
    echo "<h2 style='text-align:center; color:red;'>Invalid request method.</h2>";
}
?>

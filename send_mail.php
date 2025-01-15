<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include PHPMailer via Composer

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $comments = htmlspecialchars($_POST['comments']);

    if (empty($name) || empty($email) || empty($comments)) {
        echo json_encode(['status' => 'error', 'message' => 'Required fields are missing.']);
        exit;
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'ramananbala29@gmail.com'; // Your email address
        $mail->Password = 'aoin wzqn obgk sktv'; // Your email password (Use app password for Gmail)
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $name); // Sender's email and name
       
        $mail->addAddress('welcome@everhomesconstruction.com', 'Everhomes Construction');
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Queries';
        $mail->Body = "
            <h3>Contact Form Details</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Phone:</strong> {$service}</p>
            <p><strong>Message:</strong></p>
            <p>{$comments}</p>
        ";

        // Send the email
        if ($mail->send()) {
            echo '<div id="message" style="color: green; font-weight: 400;">Email sent successfully!</div>';
            header("location:index.php");
        } else {
            echo '<div style="color: red; font-weight: 400;">Failed to send email.</div>';
            header("location:index.php");
        }
    } catch (Exception $e) {
        echo ('Email could not be sent.Please retry');
        header("location:index.php");
    }
}
?>
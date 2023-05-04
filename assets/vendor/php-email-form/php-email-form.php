<?php
  // Replace YOUR_EMAIL_ADDRESS with your own email address
  $to_email = 'pat.mariano04@gmail.com';

  // Only process POST requests
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form fields and remove whitespace
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Set up the email headers
    $headers = 'From: '.$name.' <'.$email.'>' . "\r\n" .
               'Reply-To: '.$email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Send the email
    if (mail($to_email, $subject, $message, $headers)) {
      // Email sent successfully
      echo 'success';
    } else {
      // Error sending email
      echo 'error';
    }
  } else {
    // Redirect back to the contact page
    header('Location: /contact');
  }
?>

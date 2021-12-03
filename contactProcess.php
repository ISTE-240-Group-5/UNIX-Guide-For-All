<!-- 
Name         : contact us
File         : contact.php
Objectives   : _________________________________________
Usage        : Read directly in browser.
Compatibility: caniuse.com, allmost all browsers.
Rights       : Copyright (c) 2021 Quasar - GPLv3             
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact Quasar</title>
    <meta name="_____" content="_____">
    <meta name="_____" content="_____">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    <script src="assets/js/javascript.js"></script>

</head>
<body>

<?php 
    //include header
    $page = 'contact';
    require('assets/inc/global/header.php');
	require('assets/inc/global/nav.php');
?>

<div class="content">

    <?php
        if (isset($_POST['Email'])) {

            // EDIT THE 2 LINES BELOW AS REQUIRED
            $email_to = "quasarunix@gmail.com";
            $email_subject = "New form submissions";

            function problem($error)
            {
                echo "We are very sorry, but there were error(s) found with the form you submitted. ";
                echo "These errors appear below.<br><br>";
                echo $error . "<br><br>";
                echo "Please go back and fix these errors.<br><br>";
                die();
            }

            // validation expected data exists
            if ( !isset($_POST['Name']) || !isset($_POST['Email']) || !isset($_POST['Message'])  ) {
                problem('We are sorry, but there appears to be a problem with the form you submitted.');
            }

            $name = $_POST['Name']; // required
            $email = $_POST['Email']; // required
            $message = $_POST['Message']; // required

            $error_message = "";
            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

            if (!preg_match($email_exp, $email)) {
                $error_message .= 'The Email address you entered does not appear to be valid.<br>';
            }

            $string_exp = "/^[A-Za-z .'-]+$/";

            if (!preg_match($string_exp, $name)) {
                $error_message .= 'The Name you entered does not appear to be valid.<br>';
            }

            if (strlen($message) < 2) {
                $error_message .= 'The Message you entered do not appear to be valid.<br>';
            }

            if (strlen($error_message) > 0) {
                problem($error_message);
            }

            $email_message = "Form details below.\n\n";

            function clean_string($string)
            {
                $bad = array("content-type", "bcc:", "to:", "cc:", "href");
                return str_replace($bad, "", $string);
            }

            $email_message .= "Name: " . clean_string($name) . "\n";
            $email_message .= "Email: " . clean_string($email) . "\n";
            $email_message .= "Message: " . clean_string($message) . "\n";

            // create email headers
            $headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";
            @mail($email_to, $email_subject, $email_message, $headers);
        }
    ?>

    <!-- include your success message below -->
        <div class="success">Thank you for contacting us! We will be in touch with you very soon.</div>
    

</div>

<?php 
    //include footer
	require('assets/inc/global/footer.php');

?>

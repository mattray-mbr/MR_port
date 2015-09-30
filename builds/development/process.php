<?php 
    if (($_SERVER['REQUEST_METHOD'] == 'POST' ) && ( !empty($_POST[ 'action' ]))) {
 
        if (isset($_POST [ 'name' ] )) { $name = $_POST['name']; }
        if (isset($_POST [ 'email' ] )) { $email = $_POST['email']; }
        if (isset($_POST [ 'message' ] )) {
            $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING ); }
        $msg = '';

$formErrors = false;

        if ($name === ' ') {
            $err_name = '<div class="error">Sorry, your name is a required field</div>';
            $formErrors = true;
        };

        if ($email === ' ') {
            $err_email = '<div class="error">Sorry, your email is a required field</div>';
            $formErrors = true;
        };

        if ($message === ' ') {
            $err_message = '<div class="error">Sorry, your message is a required field</div>';
            $formErrors = true;
        };

        if (!($formErrors)) {
            $to = "mattray.apex@gmail.com";
            $subject = "from $name -- website contact form";
            $info = "$name, $email, $message";

            if (mail($to, $subject, $info)) {
                    $msg = "your message has been sent successfully";
            } else {
                    $msg = "oops, there was a problem sending the form. please try again";
            }; //mail form data

        }; //if no errors

    } else {
        $msg = "oops, there was a problem sending the form. please try again";
    }; //form submitted

 ?>
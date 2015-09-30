<?php 

    session_start( );

    require_once 'phpmailer/PHPMailerAutoload.php';

    $errors = [];


    if(isset($_REQUEST['name'], $_REQUEST['email'], $_REQUEST['message'])) {

        $fields = [
            'name' => $_REQUEST['name'],
            'email' => $_REQUEST['email'],
            'message' => $_REQUEST['message']
            ];

            foreach($fields as $field => $data) {
                if(empty($data)) {
                    $errors [] = 'the ' . $field . ' field is required';
                }
            }

            if(empty($errors)) {
                $mail = new PHPMailer;

                $mail ->isSMTP( );
                $mail ->SMTPAuth = true;
                $mail -> CharSet = 'utf-8';

                $mail -> SMTPDebug = true;

                $mail -> Host = 'smtp.gmail.com';
                $mail -> Username = 'mattray.apex@gmail.com';
                $mail -> Password = 'ER86sh6n63173';
                $mail -> SMTPSecure = 'tls';
                $mail -> Port = 465;
                //used for connection not the sending address

                $mail -> isHTML(true);
                $mail -> Mailer = 'smtp';

                $mail -> Subject = 'contact form';
                $mail -> Body = 'From: ' . $fields['name'] . ' (' . $fields['email'] . ') <p>' . $fields['message'] . '</p>';

                $mail -> FromName = 'Contact Form';

                $mail -> AddAddress('mattray.apex@gmail.com', 'matt');

                if($mail -> send()) {
                    header('Location: contact.php');
                    die();
                } else {
                    $errors [] = 'oops, something went wrong, please try again';
                }
            }

    } else {
        $errors[] = 'something went wrong';
    }

    $_SESSION[ 'errors' ] = $errors;
    $_SESSION[ 'fields' ] = $fields;

    header( 'Location: contact.php');
 ?>
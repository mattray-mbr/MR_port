
<?php 
    session_start( );

    require_once 'security.php';

    $errors = isset($_SESSION[ 'errors' ]) ? $_SESSION [ 'errors' ] : [ ];
    $fields = isset($_SESSION[ 'fields' ]) ? $_SESSION [ 'fields' ] : [ ];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php 
        include("includes/header.php");
     ?>
    <div class="container">
        <div class="img-container col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" id="landscape">
            <div class="semi-circle alt-page" id="top-left"></div>
            <div class="semi-circle alt-page" id="top-right"></div>
            <div class="page-head">     
                <h2 class="page-title">Questions, Comments, or Advice</h2>
            </div>
            <div class="semi-circle alt-page" id="bottom-left"></div>
            <div class="semi-circle alt-page" id="bottom-right"></div>
        </div>
    </div> 
    <div class="row">
    <div class="content col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1" id="container-bottom">
    <h3>Still having issues getting this to work. grrrr...</h3>
    <?php if(!empty($errors)): ?>
        <div class="formErrors">
            <ul>
                <li style="color:red"><?php echo implode( '</li ><li style="color:red">', $errors); ?></li>
            </ul>
        </div>
    <?php endif; ?>
        <form id="myContactForm" action="mail.php" method=' post' role="form">
            <div class="form-group">
                <label for="contact-name" class="control-label">Name</label>
                <input name="name" type="text" class="form-control" id="contact-name" placeholder="Name" <?php echo isset($fields[ 'name' ]) ? 'value=" ' . e($fields[ 'name' ]) .' " ' : ' ' ?>>
            </div>
            <div class="form-group">
                <label for="contact-email" class="control-label">Email</label>
                <input name="email" type="email" class="form-control" id="contact-email" placeholder="example@domain.com" <?php echo isset($fields[ 'email' ]) ? 'value=" ' . e($fields[ 'email' ]) .' " ' : ' ' ?>>
            </div>
            <div class="form-group">
                <label for="contact-message" class="control-label">Message</label>
                <textarea name="message" class="form-control" id="contact-message" rows="7" placeholder="type message here" ><?php echo isset($fields[ 'message' ]) ?  e($fields[ 'message' ]) : ' ' ?></textarea>
            </div>
                <button name="" type="submit" value="send" class="btn btn-lg btn-success">Send</button>
        </form>

    </div>
    </div> <!-- row -->
    <?php 
        include("includes/footer.php");
     ?>
</body>
</html>
<?php
     unset($_SESSION['errors' ]);
     unset($_SESSION[ 'fields' ]);
 ?>
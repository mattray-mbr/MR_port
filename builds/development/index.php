<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Matt Ray Portfolio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- allows better scaling for smaller devices -->
</head>
<body>
    <?php 
        include("includes/header.php");
     ?>
    <div class="container">
        <h2 class="tagline">Aspiring Web Designer</h2>
        <div class="img-container col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1" id="landscape">
            <div class="semi-circle hidden-xs" id="top-left"></div>
            <div class="semi-circle hidden-xs" id="top-right"></div>
            <img class="img-responsive" src="images/landscape1.png" alt="landscape">
            <div class="semi-circle hidden-xs" id="bottom-left"></div>
            <div class="semi-circle hidden-xs" id="bottom-right"></div>
        </div>
    </div>
    <div class="container" id="container-bottom">
        <div class="content">
            <h2 id="contentHeading">Featured Work</h2>
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <a href="http://www.raycegravity.com" target="_blank"><img id="current-img" class="img-responsive" src="images/RayceGravity1.png" alt="rayce gravity"></a>
                <p>The new version of Rayce gravity Bikes. Single page bootstrap layout updated before the 2015-2016 ski season starts. check it out.</p>
            </div>
        </div>
    </div>
    <?php 
        include("includes/footer.php");
     ?>
</body>
</html>
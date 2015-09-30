<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Resources</title>
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
                <h2 class="page-title">Learning Resources</h2>
            </div>
            <div class="semi-circle alt-page" id="bottom-left"></div>
            <div class="semi-circle alt-page" id="bottom-right"></div>
        </div>
    </div>
    <div class="row">
        <div class="content resources col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1" id="container-bottom">

           <p>I have spent a pretty significant amount of time trying to learn programming on my own through online tutorials and books. While this has given me a good start into being a developer. Here are some of the things that I have used and found helpful.</p>
           <h3>Website Resources</h3>
           <p class="websites"><a href="https://teamtreehouse.com" target="_blank">Team Treehouse</a>, <a href="http://www.lynda.com" target="_blank">Lynda</a>, <a href="https://www.codecademy.com/" target="_blank">Codecademy</a>, <a href="https://www.codeschool.com" target="_blank">Code School</a>,<a href="https://www.developphp.com/" target="_blank">DevelopPHP</a></p>
           <h3> Books</h3>
           <p>Javascript Patterns, Javascript: The Good Parts, The Little Book on CoffeeScript, Think like a Programmer</p>
           <div class="row">
              <img class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2" src="images/books.png" alt="javascript books">
           </div>
           <h3>School</h3>
           <p>In the future I plan to go back to a school/bootcamp specifically for programming and web development to progress my skills in a more professional environment.</p>
           <h4 class="github"> Your welcome to check out my <a href="https://github.com/stybba21" target="_blank">github profile </a> There's not much there now, but I will add more in the future</h4>
        </div>
    </div> <!-- row -->
    <?php 
        include("includes/footer.php");
     ?>
</body>
</html>
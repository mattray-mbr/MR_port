<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Projects</title>
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
                <h2 class="page-title">Recent Projects and Updates</h2>
            </div>
            <div class="semi-circle alt-page" id="bottom-left"></div>
            <div class="semi-circle alt-page" id="bottom-right"></div>
        </div>
    </div>
    <div class="row">
    <div class="content col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1" id="container-bottom">
       <h3>A bit about my workflow and design process</h3>
       <p class="words">With the things that I have worked on, I was focusing more on responsive design over advanced functionality in my projects. I am primarily using bootstrap, sass, and a small bit of compass and php in most of my projects to achieve some flexibility and cut down on repetition. I want to gradually bring in more functionality into my projects in the future. Right now I am working with gulp, git, and npm for workflow management. Moving forward from what I am doing now, I would like to focus on the MEAN stack of development. Hopefully this will give a more professional aspect to my projects and give me practical experience working with tools commonly used in the industry</p>
       <h3> This Site</h3>
       <p class="words">Just a simple portfolio website that I will be using from now on. It's kind of still in a rough draft phase, but I will be updating it gradually over the next year or so until I get everything fully fleshed out the way I want it. I went with a very natural earthy color scheme which reflects who I am and where I grew up. I still need to test and update the contact form as it is not fully functional right now. Overall I am pretty satisfied with how the site works at this point in time.</p>
       <h3>Rayce Gravity</h3>
       <p class="words"> Rayce Gravity is one of the first sites that I have done. I have re-done the site several times, hopefully improving it each time as I learn more. It was made for a family member that has a small start-up business. Due to not having a ton of information about the business I decided to go with a simple single-page layout. As it is a bootstrap framework, the layout changes a bit from wide-screen to mobile. Overall load time is a bit slow because of the pictures, so I will try to improve this in the future.</p>
       <div class="work-imgs">
            <a href="http://www.raycegravity.com" target="_blank"><img class="img-responsive" src="images/RayceMultiple.png" alt="RayceGravPics"></a>
       </div>
       <h3> Blaze Gold Gaming</h3>
       <div class="work-imgs">
       <a href="http://www.blazegoldgaming.com" target="_blank"><img class="img-responsive blazepic" src="images/placeholder.png" alt="blazegoldgaming"></a>
       </div>
       <p class="words">This is sort of a side project that I will ocasionally work on over time. Blaze Gold Gaming is a template for a online gaming guild and community. Although not intended to be in use, I am working on making it fully funtional in all aspects. I decided to go with a gaming site for a few reasons. It allows me to build it the way that I want instead of appealing to a bussiness or other group. Also with there being a ton of other guild sites via platforms like guild launch, I can draw inspiration from what they do, while understanding just how to implement certain features by myself. I can also work on different parts over time as I learn the ins and outs of things like forums, log-in, api calls, application forms and other things. It will be an on-going project that is a good step for me in adding functionality, and is more of a testing ground than anything else for me to learn without impeding on anyone or being restricted to a deadline.</p>
       <h3>Future Projects</h3>
       <p class="words"> I have a bunch of other ideas for projects planned in the future that revolve more around javascript and the MEAN stack structure, I'm just not ready to share what those are and won't post them until they are further along in development. Stay tuned for other things coming. </p>
    </div>
    </div> <!-- row -->
    <?php 
        include("includes/footer.php");
     ?>
</body>
</html>
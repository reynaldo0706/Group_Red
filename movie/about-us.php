<?php
include('cn.php');
session_start();

?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>About Us :</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-1 { padding-right: 10px;padding-left: 10px; vertical-align: top;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
    <div class="art-sheet clearfix">
<header class="art-header clearfix">


    <div class="art-shapes">
<?php
if(isset($_SESSION['loggedInUser'])){
		echo '<h3 style="text-align:left;font-family:Comic Sans MS;">Welcome</h3><b>' . htmlentities($_SESSION['loggedInUser']). '</b>.<p class="change_link"> 
		Leave the application:
	    <a href="Newlogout.php" class="to_register">[Logout]</a> ||
		Go to profile page:
	    <a href="Newprofile.php" class="to_register">[Profile]</a></p>';
		

	}
else
{
echo '<p class="change_link"><a href="Newlogin.php">Sign in</a> || <a class="item" href="NewRegister.php">create an account</a></p>';
}
?>

            </div>

                
                    
</header>
<nav class="art-nav clearfix">
    <ul class="art-hmenu"><li><a href="home.php" class="active">Home</a></li><li><a href="about-us.php">About Us</a></li><li><a href="movies.php">Movies</a><ul><li><a href="movies/films.php">Films</a><ul><li><a href="movies/films/tiny-furnitures.php">Tiny Furnitures</a></li><li><a href="movies/films/hannah-arendht.php">Hannah Arendht</a></li><li><a href="movies/films/the-great-beauty.php">The Great Beauty</a></li></ul></li><li><a href="movies/trailers.php">Trailers</a><ul><li><a href="movies/trailers/hannah-arendht.php">Hannah Arendht</a></li><li><a href="movies/trailers/the-great-beauty.php">The Great Beauty</a></li><li><a href="movies/trailers/tiny-furnitures.php">Tiny Furnitures</a></li></ul></li></ul></li><li><a href="discussions.php">Discussions</a></li><li><a href="articles.php">Articles</a></li><li><a href="calendar.php">Calendar</a></li><li><a href="reviews.php">Reviews</a></li><li><a href="contact-us.php">Contact Us</a></li></ul>
    </nav>
<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader">About Us :</h2>
                                                            
                                    </div>
                                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 42%" >
        <p> </p>
        <img width="300" height="267" style="margin-top: 10px; margin-right: 10px; margin-bottom: 10px; margin-left: 10px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-top-color: rgb(132, 132, 132); border-right-color: rgb(132, 132, 132); border-bottom-color: rgb(132, 132, 132); border-left-color: rgb(132, 132, 132); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; " alt="" class="art-lightbox" src="images/bf273421-eb9b-4523-8c85-c203f4283a05.png">
        <p><br></p>
    </div><div class="art-layout-cell layout-item-0" style="width: 58%" >
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: 'Palatino Linotype'; font-size: 15px;">We are students in NCI - National College of Ireland located in IFSC Mayor Street Dublin 1.&nbsp;</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: 'Palatino Linotype'; font-size: 15px;">Currently studying Bachelor of Science Honours in Computing and Bachelor of Science Honours in Business Information Systems.</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: 'Palatino Linotype'; font-size: 15px;">We decided to create a website for Independent Movies or Indie Films as they are not well advertised in the society as well as the main stream films.</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: 'Palatino Linotype'; font-size: 15px;">Irvine Ferris - 3rd Year in BSc (Hons) in Business Information System -&nbsp;</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: 'Palatino Linotype'; font-size: 15px;"><br></span></p>
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: 'Palatino Linotype'; font-size: 15px;">Reynaldo Reyes - 3rd Year in BSc (Hons) in Computing -</span></p>
        <p><span style="font-weight: bold;"></span></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-1" style="width: 100%" >
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: 'Palatino Linotype'; font-size: 15px;">George Chiwara - 3rd Year in BSc (Hons) in Computing -</span></p>
        <p><br></p>
        <p><span style="font-size: 11pt; line-height: 115%; font-family: 'Palatino Linotype';">Agnieszka Szczepankiewicz - 3rd Year in Computing -</span></p>
        <p><span style="font-size: 11pt; line-height: 115%; font-family: 'Palatino Linotype';"><br></span></p>
        <p><span style="font-size: 11pt; line-height: 115%; font-family: 'Palatino Linotype';">Megan Carroll - 3rd Year in Business Information Systems -</span></p>
        <p><span style="font-size: 11pt; line-height: 115%; font-family: 'Palatino Linotype';">&nbsp;</span><br></p>
    </div>
    </div>
</div>
</div>
</article></div>
                    </div>
                </div>
            </div><footer class="art-footer clearfix">
<p>Copyright © 2013,IndieMovies.com All Rights Reserved.</p>
</footer>

    </div>
</div>


</body></html>
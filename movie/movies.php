<?php
include('cn.php');
session_start();

?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Films</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


</head>
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
                                        <h2 class="art-postheader">Films</h2>
                                                            
                                    </div>
                                <div class="art-postcontent art-postcontent-0 clearfix"><p class="MsoNormal"><img width="266" height="379" alt="" class="art-lightbox" src="images/thegreatbeauty.poster.ws_.jpg" style="float: right;"></p>
<p class="MsoNormal"><span style="font-family: 'Palatino Linotype'; font-size: 16px;"><br></span></p>
<p class="MsoNormal"><span style="font-family: 'Palatino Linotype'; font-size: 16px;">The Great Beauty (Italian: La grande bellezza) is a 2013 Italian film directed by Paolo Sorrentino. It is a co-production between the Italian Medusa Film and Indigo Film and the French Babe Films, with support from Banca Popolare di Vicenza and Pathé. Filming took place in Rome starting on 9 August 2012. It was nominated for the Palme d'Or at the 2013 Cannes Film Festival. It was shown at the 2013 Toronto International Film Festival. and at the 2013 Reykjavik European Film Festival. The film has been selected as the Italian entry for the Best Foreign Language Film at the 86th Academy Awards.</span></p>
<p class="MsoNormal"><span style="font-family: 'Palatino Linotype'; font-size: 16px;">After his 65th birthday, Jep Gambardella, an aging intellectual and one-time writer, decides to dedicate his life to the search of a meaning. On the background of a mysterious and wonderful Rome, our main character slowly rediscovers beauty under the monotonous, empty shell of a lifetime between sinners. Following a boring night spent between the sheets of a boring and egocentric rich woman from Milan, Jep decides to stick on a quieter quality of life, but several, casual, meetings will force him to reconsider his priorities. A stripper on the verge of breakdown, the ex-husband of his first love, a bizarre magician and a living Saint from a far away reality, will soon allow Jep to discover his own, personal, Great Beauty.</span></p>
<p>
<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<br></p></div>
</article></div>
                    </div>
                </div>
            </div><footer class="art-footer clearfix">
<p>Copyright © 2013,IndieMovies.com All Rights Reserved.</p>
</footer>

    </div>
</div>


</body></html>
<?php
include('cn.php');
session_start();

?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Reviews</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
    <div class="art-sheet clearfix">
<header class="art-header clearfix">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=357253281087132";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



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
                                        <h2 class="art-postheader">Reviews</h2>
                                                            
                                    </div>
                                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
        <p class="MsoNormal"><span style="color: rgb(255, 212, 0); font-size: 18px; font-weight: bold;">Toni Servillo is a mercurial presence as Paolo Sorrentino returns to familiar territory - The Great Beauty Review</span><br></p>
        <p class="MsoNormal"><span style="font-family: 'Palatino Linotype'; font-size: 16px;">After losing the plot somewhat with his American road movie This Must Be the Place, Paolo Sorrentino returns to the more familiar territory of Felliniesque Roma, a city in which glamour and grotesquerie dance cheek-to-cheek, caught eternally between heaven and hell, between the convent and the Coliseum.</span></p>
        <p><span style="font-size: 16px;"><span style="font-family: 'Palatino Linotype';">Reuniting with long-term muse Toni Servillo, Sorrentino presents a writer's-blocked roué in his mid-60s (the film opens with a carnivalesque birthday party, and continues thusly) facing the hollowness of life and the imminence of death amid a maelstrom of socialite dinners at which cardinals talk only of food and the keys to the city come in a box. "I'm not a misogynist, I'm a misanthropist," declares Servillo's Jep, although it's hard to tell the difference; an imposingly diminutive female editor notwithstanding, there's a superfluity of nuns and strippers, with the odd intellectual thrown in for the purpose of withering mockery under the unrelentingly male gaze.</span><br></span></p>
        <p>  </p>
        <p><span style="font-family: 'Palatino Linotype'; font-size: 16px;">&nbsp;As always, Sorrentino has an architectural eye, his cameras panning over crumbling buildings, unclothed bodies and (most importantly) Servillo's face with enraptured awe. Céline, Proust, Sartre, Dostoevsky et al are invoked for both comic and philosophical purpose (you half-expect a cameo from Woody Allen) although dialogue is often abandoned in favour of music as the succession of tableaux vivants unfold. Ultimately, it all adds up to less than the sum of its parts, lacking the discipline of the superior Il Divo. But Servillo is an entrancingly mercurial presence upon whose reptilian smile an entire city appears to be founded.</span></p>
        <p><br></p>
        <p><span style="color: rgb(255, 212, 0); font-size: 18px; font-weight: bold;"></span></p>
        <h4><span style="color: rgb(255, 212, 0); font-size: 18px; font-weight: bold;">- Mark Kermode The Guardian || The Observer</span></h4>
        <p><span style="font-family: 'Palatino Linotype'; font-size: 15px; line-height: 17px;"><br></span></p>
		<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script></p>
<div class="fb-comments" data-href="http://example.com/comments" data-numposts="5"></div>
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
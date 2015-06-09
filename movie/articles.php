<?php
include('cn.php');
session_start();

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Articles</title>
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
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }.art-content .art-postcontent-1 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }.art-content .art-postcontent-2 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
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
<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><a href="Blog Posts/new-post.php">Antonia Campbell Hughes, Julian Morris to star in Kelly + Victor</a>
                                        </h2>
                                                            <div class="art-postheadericons art-metadata-icons">
                        <span class="art-postdateicon"></span>
                         | <span class="art-postauthoricon"> <a href="#" title="Posts by Admin">Admin</a></span>
                         | <span class="art-postpdficon"></span>
                         | <span class="art-postprinticon"></span>
                         | <span class="art-postemailicon"></span>
                         | <span class="art-postediticon"></span>
                                            </div>
                                    </div>
                                <div class="art-postcontent art-postcontent-0 clearfix">
<div class="art-content-layout">
<div class="art-content-layout-row">
<div class="art-layout-cell layout-item-0" style="width: 100%">
<p> </p>
<img style="float: left; margin-top: 5px; margin-right: 20px; margin-bottom: 5px; margin-left: 5px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;" width="350" height="178" alt="" class="art-lightbox" src="images/fad70403-5fcc-4b6b-8725-76ef7b8613a3.png">
<p>         </p>
<p class="MsoNormal"><span style="font-size: 16px; font-family: 'Palatino Linotype';">By Sarah Cooper</span></p>
<p><span style="font-size: 16px; font-family: 'Palatino Linotype';">&nbsp;</span><span style="font-family: 'Palatino Linotype'; font-size: 16px;">The feature adaptation of Niall Griffith’s novel about a passionate love affair has begun shooting in Liverpool.</span></p>
</div>
</div>
</div><br><a href="Blog Posts/new-post.php">Read more...</a>
                </div>
</article>
<article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><a href="Blog Posts/new-post-2.php">Young Filmmaker’s Search for Her Worth Is Rewarded</a>
                                        </h2>
                                                            <div class="art-postheadericons art-metadata-icons">
                        <span class="art-postdateicon"></span>
                         | <span class="art-postauthoricon"> <a href="#" title="Posts by Admin">Admin</a></span>
                         | <span class="art-postpdficon"></span>
                         | <span class="art-postprinticon"></span>
                         | <span class="art-postemailicon"></span>
                         | <span class="art-postediticon"></span>
                                            </div>
                                    </div>
                                <div class="art-postcontent art-postcontent-1 clearfix">
<div class="art-content-layout">
<div class="art-content-layout-row">
<div class="art-layout-cell layout-item-0" style="width: 100%"><img style="float: left; margin-top: 5px; margin-right: 20px; margin-bottom: 5px; margin-left: 5px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;" width="350" height="178" alt="" class="art-lightbox" src="images/1e24fc92-d7a8-4585-a632-60267c515d4b.png">
<p class="MsoNormal"><span style="font-family: 'Palatino Linotype'; font-size: 16px;">By David Carr&nbsp;</span></p>
<p>         </p>
<p class="MsoNormal"><span style="font-family: 'Palatino Linotype'; font-size: 16px;">AUSTIN, Tex. — In the movie “Tiny Furniture,” a young woman named Aura breaks up with her boyfriend, returns home from college, moves in with her wildly successful artist family in a pristine TriBeCa loft, all the while trying to find a place to stand in the world.</span></p>
</div>
</div>
</div><br><a href="Blog Posts/new-post-2.php">Read more...</a>
                </div>
</article>
<article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><a href="Blog Posts/new-post-3.php">La Dolce Vita Gone Sour (and This Time in Color) Paolo Sorrentino’s ‘Great Beauty’ Explores Italy’s Decline</a>
                                        </h2>
                                                            <div class="art-postheadericons art-metadata-icons">
                        <span class="art-postdateicon"></span>
                         | <span class="art-postauthoricon"> <a href="#" title="Posts by Admin">Admin</a></span>
                         | <span class="art-postpdficon"></span>
                         | <span class="art-postprinticon"></span>
                         | <span class="art-postemailicon"></span>
                         | <span class="art-postediticon"></span>
                                            </div>
                                    </div>
                                <div class="art-postcontent art-postcontent-2 clearfix">
<div class="art-content-layout">
<div class="art-content-layout-row">
<div class="art-layout-cell layout-item-0" style="width: 100%"><img style="float: left; margin-top: 10px; margin-right: 20px; margin-bottom: 10px; margin-left: 10px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px;" width="349" height="212" alt="" class="art-lightbox" src="images/171646e6-2467-4628-a183-d8f5eb251bfd.png">
<p class="MsoNormal"><span style="font-size: 16px; font-family: 'Palatino Linotype';">ROME — There is a striking scene in “The Great Beauty,” Paolo Sorrentino’s luscious new film, in which Jep Gambardella, a perpetually amused, impeccably tailored blocked novelist, looks down on the hulking body of the Costa Concordia cruise ship, which has been lodged off the Tuscan coast since its captain all but sank it there nearly two years ago.</span></p>
</div>
</div>
</div><br><a href="Blog Posts/new-post-3.php">Read more...</a>
                </div>
</article>
</div>
                    </div>
                </div>
            </div><footer class="art-footer clearfix">
<p>Copyright © 2013,IndieMovies.com All Rights Reserved.</p>
</footer>

    </div>
</div>


</body></html>
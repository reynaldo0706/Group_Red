<?php
include('cn.php');
session_start();

$userUsername = $_SESSION['loggedInUser'];

$sql = "SELECT * FROM user WHERE
	user_username = '" . $userUsername . "'";
$result = mysql_query($sql, $cn) or
	die(mysql_error($cn));
$row = mysql_fetch_assoc($result);

$userAge = $row['user_age'];
$userCountry = $row['user_country'];
$userJoinDateLinux = $row['user_join_date'];

// convert user join date time from linux to readable format
$userJoinDate = date("F jS, Y", $userJoinDateLinux);
?>

<!DOCTYPE html>


<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 	<meta name="description" content="A short description." />
 	<meta name="keywords" content="put, keywords, here" />
	<link rel="stylesheet" href="style2.css" type="text/css">


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


    <div class="art-shapes">


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
                                        <h2 class="art-postheader">Your Profile</h2>
                                                            
                                    </div>
                                <br>
								<br>
<img src="MovieCamera.gif" alt="Logo" width="100" height="100">

<br>
<h3 style="text-align:center;font-family:Comic Sans MS;">Welcome <?php echo $userUsername; ?></h3>
<h4 style="text-align:center;font-family:Comic Sans MS;">Some fun facts about you:</h4>
<p style="text-align:center;font-family:Comic Sans MS;">You are from <?php echo $userCountry; ?>, <?php echo $userAge; ?> years old, and you joined us on <?php echo $userJoinDate; ?>.</p>
<br />
<p class="change_link">
	                    Leave the application:
	                    <a href="Newlogout.php" class="to_register">[Logout]</a>
	                    Go to page:
	                    <a href="home.php" class="to_register">[Home]</a>
                </p>
				<br/><br/><br/>
       


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
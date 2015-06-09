
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
   <ul class="art-hmenu"><li><a href="home.php" class="active">Home</a></li><li><a href="about-us.html">About Us</a></li><li><a href="movies.html">Movies</a><ul><li><a href="movies/films.html">Films</a><ul><li><a href="movies/films/tiny-furnitures.html">Tiny Furnitures</a></li><li><a href="movies/films/hannah-arendht.html">Hannah Arendht</a></li><li><a href="movies/films/the-great-beauty.html">The Great Beauty</a></li></ul></li><li><a href="movies/trailers.html">Trailers</a><ul><li><a href="movies/trailers/hannah-arendht.html">Hannah Arendht</a></li><li><a href="movies/trailers/the-great-beauty.html">The Great Beauty</a></li><li><a href="movies/trailers/tiny-furnitures.html">Tiny Furnitures</a></li></ul></li></ul></li><li><a href="discussions.php">Discussions</a></li><li><a href="articles.html">Articles</a></li><li><a href="calendar.html">Calendar</a></li><li><a href="reviews.html">Reviews</a></li><li><a href="contact-us.html">Contact Us</a></li></ul> 
    </nav>
<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader">Wrong Information Check your login details</h2>
                                                            
                                    </div>
                                <br>
								<br>
								<img src="MovieCamera.gif" alt="Logo" width="100" height="100">


<br>
<?php
include('cn.php');
session_start();

$userUsername = $_POST['userUsername'];
$userPassword = $_POST['userPassword'];

// to protect against MySQL injection
$userUsername = mysql_real_escape_string(stripslashes($userUsername));
$userPassword = mysql_real_escape_string(stripslashes($userPassword));

$sql = "SELECT * FROM user
		WHERE
	user_username = '$userUsername' and
	user_password = '$userPassword'";
$result = mysql_query($sql, $cn) or
	die(mysql_error($cn));
	
// check if the specified user was found in database
$numberOfUsersFound = mysql_num_rows($result);

if($numberOfUsersFound == 1) {
		$_SESSION['loggedInUser'] = $userUsername;
		echo '<p style="text-align:center;font-family:Comic Sans MS;">Wrong Username or Password. Return to <a href="Newlogin.php">Login page</a>.</p>';
		header ("Location: home.php");

		
} else {
	echo '<p style="text-align:center;font-family:Comic Sans MS;">Wrong Username or Password. Return to <a href="Newlogin.php">Login page</a>.</p>';
}
?>
       


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
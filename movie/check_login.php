<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Check_Login</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style2.css" media="screen">
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
<div class="toprightcorner"><a href="login.php">Log in</a> | <a href="register.php">Register</a></div>

            </div>

                
                    
</header>
<nav class="art-nav clearfix">
    <ul class="art-hmenu"><li><a href="home.html">Home</a></li><li><a href="about-us.html">About Us</a></li><li><a href="movies.html">Movies</a><ul><li><a href="movies/films.html">Films</a><ul><li><a href="movies/films/tiny-furnitures.html">Tiny Furnitures</a></li><li><a href="movies/films/hannah-arendht.html">Hannah Arendht</a></li><li><a href="movies/films/the-great-beauty.html">The Great Beauty</a></li></ul></li><li><a href="movies/trailers.html">Trailers</a><ul><li><a href="movies/trailers/hannah-arendht.html">Hannah Arendht</a></li><li><a href="movies/trailers/the-great-beauty.html">The Great Beauty</a></li><li><a href="movies/trailers/tiny-furnitures.html">Tiny Furnitures</a></li></ul></li></ul></li><li><a href="discussions.html">Discussions</a></li><li><a href="articles.html">Articles</a></li><li><a href="calendar.html" >Calendar</a></li><li><a href="reviews.html">Reviews</a></li><li><a href="contact-us.html">Contact Us</a></li></ul> 
    </nav>
<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader">Login</h2>
										                                                           
                                    </div>
          <div class="container">
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
		echo '<p style="text-align:center;font-family:Comic Sans MS;">Wrong Username or Password. Return to <a href="login.php">Login page</a>.</p>';
		header ("Location: home.php");

		
} else {
	echo '<p style="text-align:center;font-family:Comic Sans MS;">Wrong Username or Password. Return to <a href="login.php">Login page</a>.</p>';
}
?>
                    </div>
                </div>
            </div>
			<br/><br/><br/>
<footer class="art-footer clearfix">
			

</footer>

    </div>
</div>


</body></html>
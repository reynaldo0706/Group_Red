<?php
include('cn.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>NewCommit_Register</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style3.css" media="screen">
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
                                        <h2 class="art-postheader"></h2>
										                                                           
                                    </div>
          <div class="container">
<img src="MovieCamera.gif" alt="Logo" width="100" height="100">

<br>
<?php
include('cn.php');
	
$userUsername = $_POST['userUsername'];
$userPassword = $_POST['userPassword'];
$userPasswordConfirm = $_POST['userPasswordConfirm'];
$userAge = $_POST['userAge'];
$userCountry = $_POST['userCountry'];

// Prevent MySQL Injections
$userUsername = mysql_real_escape_string(stripslashes($userUsername));
$userPassword = mysql_real_escape_string(stripslashes($userPassword));
$userPasswordConfirm = mysql_real_escape_string(stripslashes($userPasswordConfirm));
$userAge = mysql_real_escape_string(stripslashes($userAge));
$userCountry = mysql_real_escape_string(stripslashes($userCountry));

$sql = "SELECT * FROM user";
$resultCount = mysql_query($sql, $cn) or
	die(mysql_error($cn));

$num_users = mysql_num_rows($resultCount);
	
$row_count = -1;
while ($row_count < $num_users) {
	$data = mysql_fetch_object($resultCount);
	$row_count++;
	
	if ($data->user_username == $userUsername) {
		echo '<p>The username "' . $userUsername . '" is not available.</p>';
		$row_count = $num_users;
	} else if ($row_count == $num_users) {
		echo '<p>The username "' . $userUsername . '" has been selected.</p>';
		
		if ($userPassword != $userPasswordConfirm) {
			echo '<p>Passwords do not match.</p>';
			echo '<p><strong>New user has not been created.</strong></p>';
		} else {
			echo '<p>Passwords match.</p>';
			
			$userJoinDate = time();
			
			$sql = "INSERT INTO
					user
				(user_username,
				 user_password,
				 user_join_date,
				 user_age,
				 user_country)
					VALUES
				('" . $userUsername . "',
				 '" . $userPassword . "',
				 '" . $userJoinDate . "',
				 '" . $userAge . "',
				 '" . $userCountry . "')";
			$result = mysql_query($sql, $cn) or
				die(mysql_error($cn));
			
			echo "<p><strong>The username '" . $userUsername . "' has been created. Please login <a href='Newlogin.php'>here</a>.</strong></p>";
		}
	}
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
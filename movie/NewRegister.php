<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Register</title>
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
                                        <h2 class="art-postheader">Register</h2>
										                                                           
                                   <div id="container">
<img src="MovieCamera.gif" alt="Logo" width="100" height="100">
<br/>
<form action="NewCommit_Register.php" method="post">
<table class="formTable" >
<tr>
	<td>Desired Username:</td>
	<td><input type="text" name="userUsername"required="required"placeholder="agent007" /></td>
</tr>
<tr>
	<td>Password:</td>
	<td><input type="password" name="userPassword"required="required"placeholder="eg. X8df!90EO" /></td>
</tr>
<tr>
	<td>Re-type Password:</td>
	<td><input type="password" name="userPasswordConfirm"required="required"placeholder="eg. X8df!90EO"/></td>
</tr>
<tr>
	<td>Age:</td>
	<td><input type="text" size="3" name="userAge"required="required"placeholder="20" /></td>
</tr>
<tr>
	<td>Country:</td>
	<td><input type="text" name="userCountry" required="required"placeholder="Ireland" /></td>
</tr>
</table>
	<br/>
	<input type="image" src="signup.png" width="100" height="25" align="center" class="sign_in"/>
	<p class="change_link">Already a member ?
	<a href="Newlogin.php" class="to_register"> Go and log in </a>
    </p>
	<br/><br/><br/>
</form>
</div>
                    </div>
                </div>
            </div><footer class="art-footer clearfix">
			

</footer>

    </div>
</div>


</body></html>
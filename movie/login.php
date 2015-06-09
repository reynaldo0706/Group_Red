<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Login</title>
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
<form action="check_login.php" method="post">
<table class="formTable" >
<tr>
<td><label>Username:</label></td>
<td><input type="text" name="userUsername" required="required"placeholder="username"/></td>
</tr>
<br>
<br>
<tr>
<td><label>Password:</label></td>
<td><input type="password" name="userPassword" required="required" placeholder="password" /></td>
</tr>
</table>
<br />
<input type="image" src="signin.png" width="100" height="25" align="center" class="sign_in"/>
<br /><br />
<p class="change_link">If you are not a memeber yet:
<a href="register.php" align="center">Register</a>
</p>
<br /><br/><br/>
</form>
</div>
                    </div>
                </div>
            </div><footer class="art-footer clearfix">
			

</footer>

    </div>
</div>


</body></html>
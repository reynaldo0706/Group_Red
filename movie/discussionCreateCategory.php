<!DOCTYPE html>


<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Discussions</title>
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
    <ul class="art-hmenu"><li><a href="home.html">Home</a></li><li><a href="about-us.html">About Us</a></li><li><a href="movies.html">Movies</a><ul><li><a href="movies/films.html">Films</a><ul><li><a href="movies/films/tiny-furnitures.html">Tiny Furnitures</a></li><li><a href="movies/films/hannah-arendht.html">Hannah Arendht</a></li><li><a href="movies/films/the-great-beauty.html">The Great Beauty</a></li></ul></li><li><a href="movies/trailers.html">Trailers</a><ul><li><a href="movies/trailers/hannah-arendht.html">Hannah Arendht</a></li><li><a href="movies/trailers/the-great-beauty.html">The Great Beauty</a></li><li><a href="movies/trailers/tiny-furnitures.html">Tiny Furnitures</a></li></ul></li></ul></li><li><a href="discussions.html" class="active">Discussions</a></li><li><a href="articles.html">Articles</a></li><li><a href="calendar.html">Calendar</a></li><li><a href="reviews.html">Reviews</a></li><li><a href="contact-us.html">Contact Us</a></li></ul> 
    </nav>
<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader">Independent Movies Forums</h2>
                                                            
                                    </div>
                                <br>
								<br>
       <?php
//create_cat.php
include 'connect.php';
include 'header.php';

echo '<h2>Create a category</h2>';
if($_SESSION['signed_in'] == false | $_SESSION['user_level'] != 1 )
{
	//the user is not an admin
	echo 'Sorry, you do not have sufficient rights to access this page.';
}
else
{
	//the user has admin rights
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		//the form hasn't been posted yet, display it
		echo '<form method="post" action="">
			Category name: <input type="text" name="cat_name" /><br />
			Category description:<br /> <textarea name="cat_description" /></textarea><br /><br />
			<input type="submit" value="Add category" />
		 </form>';
	}
	else
	{
		//the form has been posted, so save it
		$sql = "INSERT INTO categories(cat_name, cat_description)
		   VALUES('" . mysql_real_escape_string($_POST['cat_name']) . "',
				 '" . mysql_real_escape_string($_POST['cat_description']) . "')";
		$result = mysql_query($sql);
		if(!$result)
		{
			//something went wrong, display the error
			echo 'Error' . mysql_error();
		}
		else
		{
			echo 'New category successfully added.';
		}
	}
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
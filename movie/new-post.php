<?php
mysql_connect("localhost","root","");
mysql_select_db("commentbox");
$name=$_POST['name'];
$comment=$_POST['comment'];
$submit=$_POST['submit'];
 
$dbLink = mysql_connect("localhost", "root", "");
    mysql_query("SET character_set_client=utf8", $dbLink);
    mysql_query("SET character_set_connection=utf8", $dbLink);
 
if($submit)
{
if($name&&$comment)
{
$insert=mysql_query("INSERT INTO commentable (name,comment) VALUES ('$name','$comment') ");
}
else
{
echo "please fill out all fields";
}
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="../style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="../style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="../style.responsive.css" media="all">


    <script src="../jquery.js"></script>
    <script src="../script.js"></script>
    <script src="../script.responsive.js"></script>


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
    <ul class="art-hmenu"><li><a href="../home.html">Home</a></li><li><a href="../about-us.html">About Us</a></li><li><a href="../movies.html">Movies</a><ul><li><a href="../movies/films.html">Films</a><ul><li><a href="../movies/films/tiny-furnitures.html">Tiny Furnitures</a></li><li><a href="../movies/films/hannah-arendht.html">Hannah Arendht</a></li><li><a href="../movies/films/the-great-beauty.html">The Great Beauty</a></li></ul></li><li><a href="../movies/trailers.html">Trailers</a><ul><li><a href="../movies/trailers/hannah-arendht.html">Hannah Arendht</a></li><li><a href="../movies/trailers/the-great-beauty.html">The Great Beauty</a></li><li><a href="../movies/trailers/tiny-furnitures.html">Tiny Furnitures</a></li></ul></li></ul></li><li><a href="../discussions.html">Discussions</a></li><li><a href="../articles.html">Articles</a></li><li><a href="../calendar.html">Calendar</a></li><li><a href="../reviews.html">Reviews</a></li><li><a href="../contact-us.html">Contact Us</a></li></ul> 
    </nav>
<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader">Antonia Campbell Hughes, Julian Morris to star in Kelly + Victor</h2>
                                                            <div class="art-postheadericons art-metadata-icons">
                        <span class="art-postdateicon"></span>
                         | <span class="art-postauthoricon"> <a href="#" title="Posts by Admin">Admin</a></span>
                         | <span class="art-postpdficon"></span>
                         | <span class="art-postprinticon"></span>
                         | <span class="art-postemailicon"></span>
                         | <span class="art-postediticon"></span>
                                            </div>
                                    </div>
                                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
        <p> </p>
        <img style="float: left; margin-top: 5px; margin-right: 20px; margin-bottom: 5px; margin-left: 5px; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " width="350" height="178" alt="" class="art-lightbox" src="../images/fad70403-5fcc-4b6b-8725-76ef7b8613a3.png">
        <p>         </p>
        <p class="MsoNormal"><span style="font-size: 16px; font-family: 'Palatino Linotype';">By Sarah Cooper</span></p>
        <p><span style="font-size: 16px; font-family: 'Palatino Linotype';">&nbsp;</span><span style="font-family: 'Palatino Linotype'; font-size: 16px;">The feature adaptation of Niall Griffith’s novel about a passionate love affair has begun shooting in Liverpool.</span></p>
        <p><span style="font-size: 16px; font-family: 'Palatino Linotype';">&nbsp;</span><span style="font-family: 'Palatino Linotype'; font-size: 16px;">Former Screen Star of Tomorrow Antonia Campbell Hughes &#91;pictured&#93;, who made waves with her performance in Cannes title The Other Side Of Sleep, is starring opposite rising British actor Julian Morris in the feature adaptation of Niall Griffith’s novel Kelly + Victor, which has begun shooting in Liverpool.</span></p>
        <p><span style="font-size: 16px; font-family: 'Palatino Linotype';">&nbsp;</span></p>
        <p class="MsoNormal"><span style="font-size: 16px; font-family: 'Palatino Linotype';">Kieran Evans has adapted the screenplay and is directing the feature about an obsessive relationship set against the backdrop of Liverpool. Janine Marmot is producing for her company Hot Property Films.</span></p>
        <p><span style="font-size: 16px; font-family: 'Palatino Linotype';">&nbsp;</span></p>
        <p class="MsoNormal"><span style="font-size: 16px; font-family: 'Palatino Linotype';">Kelly + Victor has received backing from the Film Agency Wales, Irish Film Board, FilmFour and Domino Publishing with shooting taking place until Sept 20.</span></p>
        <p><span style="font-size: 16px; font-family: 'Palatino Linotype';">&nbsp;</span></p>
        <p class="MsoNormal"><span style="font-size: 16px; font-family: 'Palatino Linotype';">Marmot, whose latest feature Shock Head Soul is screening in competition in Venice, said: “Kelly + Victor is a powerful love story, finding beauty in the darkest abyss. Niall’s source material is compelling and cinematic and Kieran is imbuing the film with pathos, and beauty with stunning performances from our cast.”</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: 'Palatino Linotype'; font-size: 15px;"><br></span></p>
        <p><span style="font-weight: bold;"></span></p>
<body>
<center>
<form action="commentindex2.php" method="POST">
<table>
<tr><td>Name: <br><input type="text" name="name"/></td></tr>
<tr><td colspan="2">Comment: </td></tr>
<tr><td colspan="5"><textarea name="comment" rows="10" cols="50"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Comment"></td></tr>
</table>
</form>
       <?php
$dbLink = mysql_connect("localhost", "root", "");
    mysql_query("SET character_set_results=utf8", $dbLink);
    mb_language('uni');
    mb_internal_encoding('UTF-8');
 
$getquery=mysql_query("SELECT * FROM commentable ORDER BY id DESC");
while($rows=mysql_fetch_assoc($getquery))
{
$id=$rows['id'];
$name=$rows['name'];
$comment=$rows['comment'];
echo $name . '<br/>' . '<br/>' . $comment . '<br/>' . '<br/>' . '<hr size="1"/>'
;}
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
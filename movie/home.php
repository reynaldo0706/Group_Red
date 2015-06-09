<?php
include('cn.php');
session_start();

?>
<!DOCTYPE html>
<head>
<script language="javascript" src="calendar.js"></script>
</head>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


<script>jQuery(function($) {
    'use strict';
    if ($.fn.slider) {
        $(".art-slidecontainer9e879a57bc06447d939cbfe56243db0e").each(function () {
            var slideContainer = $(this), tmp;
            var inner = $(".art-slider-inner", slideContainer);
            var helper = null;


            inner.children().eq(0).addClass("active");
            slideContainer.slider({
                pause: 2600,
                speed: 600,
                repeat: true,
                animation: "fade",
                direction: "next",
                navigator: slideContainer.siblings(".art-slidenavigator9e879a57bc06447d939cbfe56243db0e"),
                helper: helper
                            });
        });
    }
});
</script>
<script>
function showResult(str)
{
if (str.length==0)
  {
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("livesearch").style.border="0px";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","livesearch.php?q="+str,true);
xmlhttp.send();
}
</script>
<script>
function getVote(int)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","poll_vote.php?vote="+int,true);
xmlhttp.send();
}
</script><style>.art-content .art-postcontent-0 .layout-item-0 { margin-top: 20px;margin-bottom: 20px;  }
.art-content .art-postcontent-0 .layout-item-1 { padding-right: 10px;padding-left: 10px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

.art-slidecontainer9e879a57bc06447d939cbfe56243db0e {
    position: relative;
        width: 380px;
    height: 253px;
        }

.art-slidecontainer9e879a57bc06447d939cbfe56243db0e .art-slide-item
{

}



.art-slidecontainer9e879a57bc06447d939cbfe56243db0e .art-slide-item {
    -webkit-transition: 600ms ease-in-out opacity;
    -moz-transition: 600ms ease-in-out opacity;
    -ms-transition: 600ms ease-in-out opacity;
    -o-transition: 600ms ease-in-out opacity;
    transition: 600ms ease-in-out opacity;
    position: absolute;
    display: none;
	left: 0;
	top: 0;
	opacity: 0;
    width:  100%;
    height: 100%;
}

.art-slidecontainer9e879a57bc06447d939cbfe56243db0e .active, .art-slidecontainer9e879a57bc06447d939cbfe56243db0e .next, .art-slidecontainer9e879a57bc06447d939cbfe56243db0e .prev {
    display: block;
}

.art-slidecontainer9e879a57bc06447d939cbfe56243db0e .active {
    opacity: 1;
}

.art-slidecontainer9e879a57bc06447d939cbfe56243db0e .next, .art-slidecontainer9e879a57bc06447d939cbfe56243db0e .prev {
    width: 100%;
}

.art-slidecontainer9e879a57bc06447d939cbfe56243db0e .next.forward, .art-slidecontainer9e879a57bc06447d939cbfe56243db0e .prev.back {
    opacity: 1;
}

.art-slidecontainer9e879a57bc06447d939cbfe56243db0e .active.forward {
    opacity: 0;
}

.art-slidecontainer9e879a57bc06447d939cbfe56243db0e .active.back {
    opacity: 0;
}


.art-slide9e879a57bc06447d939cbfe56243db0e0 {
    background-image:  url('images/slide9e879a57bc06447d939cbfe56243db0e0.png');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slide9e879a57bc06447d939cbfe56243db0e1 {
    background-image:  url('images/slide9e879a57bc06447d939cbfe56243db0e1.png');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slide9e879a57bc06447d939cbfe56243db0e2 {
    background-image:  url('images/slide9e879a57bc06447d939cbfe56243db0e2.png');
    background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slide9e879a57bc06447d939cbfe56243db0e3 {
    background-image:  url('images/slide9e879a57bc06447d939cbfe56243db0e3.png');
    background-position:  0 0;
    background-repeat: no-repeat;
}


.art-slidenavigator9e879a57bc06447d939cbfe56243db0e {
  display: inline-block;
  position: absolute;
  direction: ltr !important;
  top: 229px;
  left: 77.89%;
  z-index: 101;
  line-height: 0 !important;
  -webkit-background-origin: border !important;
  -moz-background-origin: border !important;
  background-origin: border-box !important;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-align: center;
    white-space: nowrap;
    }
.art-slidenavigator9e879a57bc06447d939cbfe56243db0e
{
background: #9C9C9C;background: linear-gradient(top, rgba(194, 194, 194, 0.6) 0, rgba(128, 128, 128, 0.6) 84%, rgba(115, 115, 115, 0.6) 100%) no-repeat;background: -webkit-linear-gradient(top, rgba(194, 194, 194, 0.6) 0, rgba(128, 128, 128, 0.6) 84%, rgba(115, 115, 115, 0.6) 100%) no-repeat;background: -moz-linear-gradient(top, rgba(194, 194, 194, 0.6) 0, rgba(128, 128, 128, 0.6) 84%, rgba(115, 115, 115, 0.6) 100%) no-repeat;background: -o-linear-gradient(top, rgba(194, 194, 194, 0.6) 0, rgba(128, 128, 128, 0.6) 84%, rgba(115, 115, 115, 0.6) 100%) no-repeat;background: -ms-linear-gradient(top, rgba(194, 194, 194, 0.6) 0, rgba(128, 128, 128, 0.6) 84%, rgba(115, 115, 115, 0.6) 100%) no-repeat;background: linear-gradient(top, rgba(194, 194, 194, 0.6) 0, rgba(128, 128, 128, 0.6) 84%, rgba(115, 115, 115, 0.6) 100%) no-repeat;-svg-background: linear-gradient(top, rgba(194, 194, 194, 0.6) 0, rgba(128, 128, 128, 0.6) 84%, rgba(115, 115, 115, 0.6) 100%) no-repeat;
-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;


padding:7px;





}
.art-slidenavigator9e879a57bc06447d939cbfe56243db0e > a
{
background: #575757;background: #575757;background: #575757;background: #575757;background: #575757;background: #575757;background: #575757;-svg-background: #575757;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigator9e879a57bc06447d939cbfe56243db0e > a.active
{
background: #FDDB7C;background: #FDDB7C;background: #FDDB7C;background: #FDDB7C;background: #FDDB7C;background: #FDDB7C;background: #FDDB7C;-svg-background: #FDDB7C;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigator9e879a57bc06447d939cbfe56243db0e > a:hover
{
background: #AB7E03;background: #AB7E03;background: #AB7E03;background: #AB7E03;background: #AB7E03;background: #AB7E03;background: #AB7E03;-svg-background: #AB7E03;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}

</style></head>
<body>
<div id="art-main">
    <div class="art-sheet clearfix">
<header class="art-header clearfix">


    <div class="art-shapes">
<!--sessions for the logged in user-->
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
	<!--[Livesearch output]-->
<div id="livesearch">
<label for = "livesearch"></label>
<input type="text" size="30" onkeyup="showResult(this.value)" placeholder="quick search">
</div>

<!--[RSS poll]-->
<div id="poll">
<h3>Do you like our website?</h3>
<form>
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">Yes<br>
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">No	
</form>
</div>
<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader">Home</h2>
                                                            
                                    </div>
                                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-1" style="width: 52%" >
<div id="9e879a57bc06447d939cbfe56243db0e" style="position: relative; display: inline-block; z-index: 0; margin: 0px;  border-width: 0px;  " class="art-collage">
<div class="art-slider art-slidecontainer9e879a57bc06447d939cbfe56243db0e">
    <div class="art-slider-inner">
<div class="art-slide-item art-slide9e879a57bc06447d939cbfe56243db0e0">

</div>
<div class="art-slide-item art-slide9e879a57bc06447d939cbfe56243db0e1">

</div>
<div class="art-slide-item art-slide9e879a57bc06447d939cbfe56243db0e2">

</div>
<div class="art-slide-item art-slide9e879a57bc06447d939cbfe56243db0e3">

</div>

    </div>
</div>
<div class="art-slidenavigator art-slidenavigator9e879a57bc06447d939cbfe56243db0e">
<a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a>
</div>



    </div>

    </div><div class="art-layout-cell layout-item-1" style="width: 48%" >
        <p style="text-align: justify;"><span style="font-family: 'Palatino Linotype'; font-size: 15px;">Welcome to the world of independent movies....</span></p>
        <p style="text-align: justify;"><span style="font-family: 'Palatino Linotype'; font-size: 15px;">Here to bring you the latest reviews, articles, trailers of independent movies</span></p>
        <p style="text-align: justify;"><span style="font-family: 'Palatino Linotype'; font-size: 15px;">Navigate through the Website by clicking the tabs above.</span></p>
        <p style="text-align: justify;"><span style="font-family: 'Palatino Linotype'; font-size: 15px;">Any problems arises, don't hesistate to contact us via email or tweeter.</span><span style="font-family: 'Palatino Linotype'; font-size: 15px;">&nbsp;</span></p>
        <p style="text-align: justify;"><span style="font-weight: bold;"><br></span></p>
    </div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-1" style="width: 75%" >
        <p class="MsoNormal" style="text-align: justify;"><span style="line-height: 115%;"><span style="font-family: 'Palatino Linotype';"><span style="font-size: 11pt;">&nbsp;</span></span></span><span style="font-family: 'Palatino Linotype'; font-size: 16px; line-height: 13px;">An independent film is a professional film production resulting in a feature film that is produced mostly or completely outside of the major film studio system. In addition to being produced and distributed by independent entertainment companies, independent films are also produced and/or distributed by subsidiaries of major film studios.&nbsp;</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span style="line-height: 115%; font-family: 'Palatino Linotype'; font-size: 16px;">Independent films are sometimes distinguishable by their content and style and the way in which the filmmakers' personal artistic vision is realized. Usually, but not always, independent films are made with considerably lower film budgets than major studio films. &nbsp;</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span style="line-height: 115%; font-family: 'Palatino Linotype'; font-size: 16px;">Generally, the marketing of independent films is characterized by limited release, but can also have major marketing campaigns and a wide release.&nbsp;</span></p>
        <p class="MsoNormal" style="text-align: justify;"><span style="font-family: 'Palatino Linotype';"><span style="line-height: 115%; font-size: 16px;">Independent films are often screened at local, national, or international film festivals before distribution (theatrical and/or retail release). An independent film production can rival a mainstream film production if it has the necessary funding and distribution.years ago.</span></span></p>
        <p><br></p>
    </div><div class="art-layout-cell layout-item-1" style="width: 25%" >
    		<a class="twitter-timeline" href="https://twitter.com/IndieMoviesIrl" data-widget-id="382819100025556992">Tweets by @IndieMoviesIrl</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<form action="index.php" method="post" name="form1">
<?php
//get class into the page
require_once('classes/tc_calendar.php');

//instantiate class and set properties
$myCalendar = new tc_calendar("date1", true);
$myCalendar->setIcon("images/iconCalendar.gif");
$myCalendar->setDate(1, 1, 2000);

//output the calendar
$myCalendar->writeScript();	  
?>
</form>


//use javascript to get the value
<script language="javascript">
<!--
function showDateSelected(){
   alert("Date selected is "+document.form1.date1.value);
}
//-->
</script>
//create link to click and check calendar value
<a href="javascript:showDateSelected();">Check calendar value</a>
<?php
$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";

?> 


</form>
		
        <p><span style="font-family: 'Palatino Linotype';"><br></span></p>
        <p><br></p>
    </div>
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
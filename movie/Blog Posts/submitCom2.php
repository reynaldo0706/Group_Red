<?php
mysql_connect("localhost","root","");
mysql_select_db("commentbox");
$name=$_POST['name'];
$comment=$_POST['comment'];
$date=date('Y-m-d H:i:s');
$submit=$_POST['submit'];
 
$dbLink = mysql_connect("localhost", "root", "");
    mysql_query("SET character_set_client=utf8", $dbLink);
    mysql_query("SET character_set_connection=utf8", $dbLink);
 $name = mysql_real_escape_string($name);

if($submit)
{
if($name&&$comment)
{

$insert=mysql_query("INSERT INTO commenttable2 (name,comment,date) VALUES ('$name','$comment','$date') ");
}
else
{
echo "please fill out all fields";
}
}
header("location:new-post-2.php");
?>
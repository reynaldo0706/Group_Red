<?php
$cn = mysql_connect('localhost', 'root', '') or
	die('Unable to connect. Check connection parameters.');
mysql_select_db('Movies', $cn) or
	die(mysql_error($cn));
?>
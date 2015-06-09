<?php
include('cn.php');
session_start();

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
		header ("Location: home.php");
?>
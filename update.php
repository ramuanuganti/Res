<?php
	mysql_connect("localhost","root","") or die("Ashok check ur connection");
	mysql_select_db("rathnam") or die("check connection");
	$username=$_REQUEST['username'];
	$email=$_REQUEST['email'];
	$mobile=$_REQUEST['mobile'];
	$password=$_REQUEST['password'];
	$q="update login set email='$email',mobile='$mobile',password='$password' where username='$username'";
	mysql_query($q) or die("Duplicate Email Id...Or Mobile Number is already in use....");
	header("location:greetings5.html");
?>

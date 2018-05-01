<?php
	mysql_connect("localhost","root","") or die("Check ur connection");
	mysql_select_db("rathnam") or die("check connection");
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$q="update login set password='$password' where username='$username'";
	mysql_query($q) or die("failed to open");
	header("location:greetings4.html");
?>
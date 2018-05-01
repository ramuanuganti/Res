<?php
$Username=$_REQUEST['username'];
	mysql_connect("localhost","root","vennela@137") or die("Ashok check ur connection");
	mysql_select_db("rathnam") or die("check connection");
$q="delete from users where Username='$Username'";
mysql_query($q) or die ("error in database");
			header("location:greetings2.html");
?>
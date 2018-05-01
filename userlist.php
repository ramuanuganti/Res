<?php

//make connection
mysql_connect('localhost','root','');

//select db
mysql_select_db('rathnam');
$sql="SELECT * FROM login";
$records=mysql_query($sql);

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stl.css">
<title>Users</title>
</head>
<body background="c.jpg">
<h2 align="center" style="background-color:pink">
	<a href="admin1.php">Back</a>&nbsp
	<a href="home.html">Home</a>&nbsp
	<a href="userlist.php">List Of users</a>&nbsp
	<a href="orderlist.php">Orders List</a>&nbsp
	<a href="email.php">Email</a>&nbsp
	<a href="index.php">Sms</a>&nbsp
	<a href="login.php">Logout</a>&nbsp
	
    <h1 align="center" style="color:red"></h1>
	<h2>
<table width="600" border="2" cellpadding="2" cellspacing="2" align="center" style="color:black">
<tr>
<th>Useername</th>
<th>Email</th>
<th>Mobile</th>
<th>Password</th></tr>


<?php 
  while($users=mysql_fetch_assoc($records))
  {
    echo "<tr>";
	echo "<td>" .$users['username']. "</td>";
	echo "<td>" .$users['email']. "</td>";
	echo "<td>" .$users['mobile']. "</td>";
	echo "<td>" .$users['password']. "</td>";
	echo "</tr>";
	}//end while
	
?>
</table></h2>
</body>
</html>
	
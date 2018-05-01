<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stl.css">
</head>
<body background="a.jpg">     
<h2 align="center" style="background-color:pink">
	<a href="home.html">Home</a>&nbsp
	<a href="updateform.html">Update</a>&nbsp
	<a href="delete.html">Delete</a>&nbsp
	<a href="logout.php">Logout</a>&nbsp
	
	
	
	
	</h2>
<h2 align="center">Order point</h2>
<form action="connect.php" method="post">
<center><table border="1" width="400" height="300">
<tr>
<td colspan="5" align="center" bgcolor="grey">Billing Menu</td>
</tr>
<tr><td>Username</td><td><input type="text" name="username"  required/></td></tr>
<tr><td>Chicken</td><td><input onclick="clickCh(this)" class="txtBox"  type="checkbox"  name="chicken" value="500" /> @500</td></tr>
<tr><td>Mutton</td><td><input onclick="clickCh(this)" class="txtBox" type="checkbox"  name="mutton" value="300" />@300</td></tr>
<tr><td>Veg</td><td><input onclick="clickCh(this)" class="txtBox" type="checkbox"   name="veg" value="200"/>@200</td></tr>
<tr><td>Salad</td><td><input onclick="clickCh(this)" class="txtBox" type="checkbox"  name="salad" value="100" />@100</td></tr>

<tr><td>Total</td><td><input type="text" id="total" name="total" value="0" /></td></tr>
<tr>
<td  colspan="5" align="center"><input type="submit" name="submit" value="submit"></td>

</tr>
</table>
</form>
</center>
<script>
var total = document.getElementById("total")
function clickCh(caller){
if(caller.checked){
add(caller)
} else {
subtract(caller)
}
}
function add(caller){ total.value = total.value*1 + caller.value*1}
function subtract(caller){ total.value = total.value*1 - caller.value*1}
</script>
</body>
</html>
<?php
session_start();
   $username=$_SESSION["username"];

mysql_connect("localhost","root","");
mysql_select_db("rathnam");
$query = "SELECT * FROM login where username='$username' ";
    $result = mysql_query($query);
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $chicken=$_POST['chicken'];
  $mutton=$_POST['mutton'];
  $veg=$_POST['veg'];
  $salad=$_POST['salad'];
  $total=$_POST['total'];
  
  $query="insert into orders(username,chicken,mutton,veg,salad,Total)values('$username','$chicken','$mutton','$veg','$salad','$total')";
  if(mysql_query($query))
  {
    header("location:greetings.html");
   }
 }
 
 ?>
	
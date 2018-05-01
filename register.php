<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","rathnam");
if(isset($_POST['register_btn']))
{
    $username=$_REQUEST['username'];
    $email=$_REQUEST['email'];
	$mobile=$_REQUEST['mobile'];
    $password=$_REQUEST['password'];
    $password2=$_REQUEST['password2'];  
     if($password==$password2)
     {           //Create User
            $password=($password); //hash password before storing for security purposes
            $sql="INSERT INTO login(username,email,mobile,password) VALUES('$username','$email','$mobile','$password')";
            mysqli_query($db,$sql);  
            $_SESSION['message']="You are now logged in"; 
            $_SESSION['username']=$username;
            header("location:connect.php");  //redirect home page
    }
    else
    {
      $_SESSION['message']="The two password do not match";   
     }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Register and login
<link rel="stylesheet" type="text/css" href="styl.css"/>  </title>
</head>
<body background="a.jpg" >
<div class="header"></br></br></br></br>
    <h1 align="center" style="color:red">Register</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<center>
<form method="post" action="register.php" style="color:blue">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput" required></td>
     </tr>
     <tr>
           <td>Email : </td>
           <td><input type="email" name="email" class="textInput" required></td>
     </tr>
	  <tr>
           <td>Mobile : </td>
           <td><input type="text" name="mobile" class="textInput" maxlength="10" pattern="[0-9]{10}" title="Please Enter 10 Numbers" required></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput" required></td>
     </tr>
      <tr>
           <td>Password again: </td>
           <td><input type="password" name="password2" class="textInput" required></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="register_btn" class="Register"></td>
     </tr>
  
</table>
</form>
Login to<a href="login.php" title="Go to login">   Click here</a>
</center>
</body>
</html>
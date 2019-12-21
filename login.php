<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('config.php');
session_start();
if (isset($_POST['username'])){
     $username = stripslashes($_REQUEST['username']);
     $username = mysqli_real_escape_string($con,$username);
     $password = stripslashes($_REQUEST['password']);
     $password = mysqli_real_escape_string($con,$password);
             $query = "SELECT * from `users` WHERE username='$username' and password='".md5($password)."'";
$result = mysqli_query($con,$query) or die(mysql_error());
$rows = mysqli_num_rows($result);
if($rows==1){
$_SESSION['username'] = $username;
header("Location: index.php");
             }else{
    echo "<div class = 'form'>
<h3>username/paswword is incorrect</h3>
<br/>Click here to  <a href='login.php'>Login</a></div>";
}
}else{
?>
<div class="form">
<h1>log in</h1>
<form name="log in" action="" method="post">
<input type="text" name="username" placeholder="username" required />
<input type="email" name="email" placeholder="email" required />
<input type="password" name="password" placeholder="password" required />
<input type="number_format" name="mobile" placeholder="mobile" />
<button type="submit" name="submit" value="register" />
</div>
<?php } ?>
</body>
</html>
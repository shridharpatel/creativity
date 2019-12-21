<!DOCTYPE html>
<html>
<head>.


<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('config.php');
if (isset($_REQUEST['username'])){
     $username = stripslashes($_REQUEST['username']);
     $username = mysqli_real_escape_string($con,$username);
     $email = stripslashes($_REQUEST['email']);
     $email = mysqli_real_escape_string($con,$email);
     $password = stripslashes($_REQUEST['password']);
     $password = mysqli_real_escape_string($con,$password);
     $trn_date =date("Y-m-d h:i:s");
	 $mobile = stripslashes($_REQUEST['mobile']);
     $mobile = mysqli_real_escape_string($con,$mobile);
             $query = "INSERT into `users` (username, password, email, trn_date, mobile)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$mobile')";
$result = mysqli_query($con,$query);
if($result){
      echo "<div class='form'>
<h3>you are register succesfully</h3>
<br/>Click here to  <a href='login.php'>Login</a></div>";
}
}else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="username" required />
<input type="email" name="email" placeholder="email" required />
<input type="password" name="password" placeholder="password" required />
<input type="number_format" name="mobile" placeholder="mobile" />
<input type="submit" name="submit" value="register" />
</div>
<?php } ?>
</body>
</html>


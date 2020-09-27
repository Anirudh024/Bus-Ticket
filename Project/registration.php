<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <style>
  h4{
    position: absolute;
    font-size: 20px;
    top: 740px;
    left: 490px;
    color: grey;
  }
  h1{
    position: absolute;
    top: 200px;
    left: 550px;
    color: grey;
    border-bottom: 6px solid #614caf;
  }
</style>
<meta charset="UTF-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if (!isset($_SESSION['username'])) { ?>
<h1>Registration</h1>
<?php
if (isset($_GET['register_action'])) {
if ($_GET['register_action'] == "success") { ?>
Successfully Registered!
<?php }
}
?>
<div class="form-box">
<form method="post" action="register-action.php">
<div class="textbox">
  <i class="fa fa-user" aria-hidden="true"></i>
<input type="text" name="username" placeholder="Username" required>
</div>
<div class="textbox">
  <i class="fa fa-id-card" aria-hidden="true"></i>
<input type="text" name="name" placeholder="Name" required>
</div>
<div class="textbox">
  <i class="fa fa-buysellads" aria-hidden="true"></i>
<input type="number" name="age" placeholder="Age" required>
</div>
<div class="textbox">
  <i class="fa fa-mars" aria-hidden="true"></i>
<input type="text" name="gender" placeholder="Gender" required>
</div>
<div class="textbox">
  <i class="fa fa-address-book" aria-hidden="true"></i>
<input type="text" name="state" placeholder="State">
</div>
<div class="textbox">
  <i class="fa fa-address-book" aria-hidden="true"></i>
<input type="text" name="city"placeholder="City" >
</div>
<div class="textbox">
  <i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" name="password" placeholder="password" id="myInput" required>
<span class="eye" onclick="myFunction()">
<i id="hide1" class="fa fa-eye"></i>
<i id="hide2" class="fa fa-eye-slash"></i>
</span>
</div>
<input class="btn" type="submit" value="Register" />
</div>
</form>
<h4>Already a member? Click <a href="index.php">here</a> to login.</h4>
<?php } else { ?>
<h4>You already logged in. Click <a href="logout.php">here</a> to logout.</h4>
<?php }
?>
<script>
   function myFunction(){
     var x = document.getElementById("myInput");
     var y = document.getElementById("hide1");
     var z = document.getElementById("hide2");

     if(x.type === 'password'){
       x.type = "text";
       y.style.display= "block";
       z.style.display= "none";
     }
     else{
       x.type = "password";
       y.style.display= "none";
       z.style.display= "block";
     }
   }
</script>
</body>
</html>

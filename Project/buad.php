<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
<title>Add Bus Details</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-box">
<form method="post" action="buad-action.php">
  <div class="textbox">
    <i class="fa fa-user" aria-hidden="true"></i>
  <input type="text" name="buscode" placeholder="Bus Code" required>
  </div>
<div class="textbox">
  <i class="fa fa-user" aria-hidden="true"></i>
<input type="text" name="servicecode" placeholder="Service Code" required>
</div>
<div class="textbox">
  <i class="fa fa-id-card" aria-hidden="true"></i>
<input type="text" name="operator" placeholder="Operator" required>
</div>
<div class="textbox">
  <i class="fa fa-map-signs" aria-hidden="true"></i>
<input type="text" name="start" placeholder="Start Point" required>
</div>
<div class="textbox">
  <i class="fa fa-map-signs" aria-hidden="true"></i>
<input type="text" name="stop" placeholder="Destination" required>
</div>
<div class="textbox">
  <i class="fa fa-bus" aria-hidden="true"></i>
<input type="text" name="bustype" placeholder="Bus type" required>
</div>
<div class="textbox">
  <i class="fa fa-money" aria-hidden="true"></i>
<input type="number" name="fare" placeholder="Fare">
</div>
<div class="textbox">
  <i class="fa fa-clock-o" aria-hidden="true"></i>
<input type="text" name="stime"placeholder="24:00:00" >
</div>
<div class="textbox">
  <i class="fa fa-clock-o" aria-hidden="true"></i>
<input type="text" name="etime" placeholder="24:00:00" required>
</div>
<input class="btn" type="submit" value="Register" />
 <a href="info.php" class="btn btn-primary">Return</a>
</div>
</div>
</form>
</body>
</html>

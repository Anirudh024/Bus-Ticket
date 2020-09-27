<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booking</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
<?php
$mysqli = NEW mysqli('127.0.0.1','root','','bus');
$sql =$mysqli->query("SELECT dat FROM temp");
$row = $sql->fetch_assoc();
if($row['dat'] < date("Y-m-d"))
{
  echo "DATE IS NOT VALID";
  header("refresh:2; url=re.php");
}
else
{
echo"<div class='container'>";
echo"<div class='row justify-content-center'>";
  $mysql= NEW mysqli('127.0.0.1','root','','bus');
   $res =$mysql->query("SELECT nof FROM temp");
   $row = $res->fetch_assoc();
   echo "<div class='form-box'>";
   echo "<form method = 'POST' action = 't.php'>";
   ?>
   <?php
	for($counter = 0; $counter < $row['nof']; $counter++)
	{?>
    </br>#<?php echo $counter+1?>:
    <div class="textbox">
      <i class="fa fa-user" aria-hidden="true"></i>
		<input type = 'text' name = 'name[]' placeholder="Name #<?php echo $counter+1?>">
  </div>
  <div class="textbox">
    <i class="fa fa-buysellads" aria-hidden="true"></i>
    <input type = 'number' name = 'age[]' placeholder="Age #<?php echo $counter+1?>">
  </div>
  <div class="textbox">
    <i class="fa fa-mars" aria-hidden="true"></i>
    <input type = 'text' name = 'gender[]' placeholder="Gender #<?php echo $counter+1?>">
  </div>
  <?php
}
?>
	<button class='btn btn-primary' value='submit'>Submit</button>
	</form>
</div>
  </div>
  </div>
  <?php

}
?>
   </body>
  </html>

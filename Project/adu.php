<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editing</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
<?php
$mysqli = NEW mysqli('127.0.0.1','root','','bus');
$pass = $_POST['password'];
$sql =$mysqli->query("SELECT pass FROM admin WHERE pass= '$pass'");

if(mysqli_num_rows($sql)> 0)
{
  header("Location: edu.php");
}
else {
  echo "Wrong Password";
  header("refresh: 2; url=admin.php");
}

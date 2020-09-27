<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booking</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
<?php

$mysqli = new mysqli('127.0.0.1','root','','bus');
if (isset($_POST['save']))
{
  $start = $_POST['start'];
  $stop = $_POST['stop'];
  $bustype = $_POST['bustype'];
  $result = $mysqli->query("SELECT * FROM businfo WHERE start = '$start' AND stop = '$stop' AND bustype = '$bustype'");
}
 ?>
 <div class="container">
<div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
        <th>Buscode</th>
        <th>Servicecode</th>
        <th>bustype</th>
        <th>Start</th>
        <th>Stop</th>
        <th>Fare</th>
        <th>Start Time</th>
        <th>Stop Time</th>
        <th colspan="8">Action</th>
      </tr>
    </thead>
<?php
if(mysqli_num_rows($result) > 0)
{
     while($row = $result->fetch_assoc()):  ?>
     <tr>
       <td><?php echo $row['buscode']; ?></td>
       <td><?php echo $row['servicecode']; ?></td>
       <td><?php echo $row['bustype']; ?></td>
       <td><?php echo $row['start']; ?></td>
       <td><?php echo $row['stop']; ?></td>
       <td><?php echo $row['fare']; ?></td>
       <td><?php echo $row['stime']; ?></td>
       <td><?php echo $row['etime']; ?></td>
       <td>
           <a href="book.php?select=<?php echo $row['buscode']; ?>"
             class="btn btn-primary">Select</a>
       </td>
     </tr>
   <?php endwhile;
 }
 else
 {
   echo "<h1>NO SERVICE AVAILABLE</h1>";
 }
 ?>
  </table>
<form action="bus.php">
<button type="submit" class="btn btn-primary" name="return">Return</button>
</form>
</div>
</div>
</body>
</html>

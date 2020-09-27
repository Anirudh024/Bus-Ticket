<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booking</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
 h4{
  color: red;
  position: absolute;
  top: 600px;
  left: 800px;
}
</style>
  </head>
  <body>
<h1>Ticket</h1>
    <?php

         $conn = NEW mysqli('127.0.0.1','root','','bus');
         $res = $conn->query("SELECT * FROM perinfo");
     ?>
     <div class="container">
     <div class="row justify-content-center">
      <table class="table" id="printPage">
        <thead>
          <tr>
            <th>Name</th>
            <th>Age</th>
            <th colspan="3">Gender</th>
          </tr>
        </thead>
     <?php
     if(mysqli_num_rows($res) > 0)
     {
         while($row = $res->fetch_assoc()):  ?>
         <tr>
           <td><?php echo $row['name']; ?></td>
           <td><?php echo $row['age']; ?></td>
           <td><?php echo $row['gender']; ?></td>
         </tr>
       <?php endwhile;
     } ?>
     </table>
     </div>
     </div>
<?php

     $mysqli = NEW mysqli('127.0.0.1','root','','bus');
     $sql = $mysqli->query("SELECT * FROM temp");


 ?>
 <div class="container">
 <div class="row justify-content-center">
  <table class="table" id="printPage">
    <thead>
      <tr>
        <th>Buscode</th>
        <th>Servicecode</th>
        <th>bustype</th>
        <th>Start</th>
        <th>Stop</th>
        <th>Fare</th>
        <th>No Of Passenegers</th>
        <th colspan="8">Date</th>
      </tr>
    </thead>
 <?php
 if(mysqli_num_rows($sql) > 0)
 {
     while($row = $sql->fetch_assoc()):  ?>
     <tr>
       <td><?php echo $row['buscode']; ?></td>
       <td><?php echo $row['servicecode']; ?></td>
       <td><?php echo $row['bustype']; ?></td>
       <td><?php echo $row['start']; ?></td>
       <td><?php echo $row['stop']; ?></td>
       <td><?php echo $row['fare']*$row['nof']; ?></td>
       <td><?php echo $row['nof']; ?></td>
       <td><?php echo $row['dat']; ?></td>
     </tr>
   <?php endwhile;
} ?>
</table>
<?php

$mysqli = NEW mysqli('127.0.0.1','root','','bus');
$sql = $mysqli->query("TRUNCATE TABLE temp");

 ?>

 <?php

 $mysql = NEW mysqli('127.0.0.1','root','','bus');
 $res = $mysql->query("TRUNCATE TABLE perinfo");

  ?>
<form action="index.php">
  <button class="btn btn-primary" name="regi">Register</button>
</form>
<button class="btn btn-primary" onclick="window.print()">Print this page</button>
<h4>*Take a printout now and no refunds allowed</h4>
</div>
</div>
</body>
</html>

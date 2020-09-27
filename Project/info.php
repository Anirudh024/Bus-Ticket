<!DOCTYPE html>
<html>
    <head>
 <meta charset="UTF-8">
 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <title>Bus Info</title>
    </head>
 <body>
   <div class="container">
   <div class="row justify-content-center">
     <h1>Bus details</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Bus Code</th>
          <th>Service Code</th>
          <th>Start</th>
          <th>Destination</th>
          <th>Operator</th>
          <th>Bus Type</th>
          <th>Fare</th>
          <th>Start Time</th>
          <th>Stop Time</th>
          <th>Edit Bus info</th>
          <th colspan="11">Delete Bus info</th>
        </tr>
      </thead>
   <?php
   $mysqli = NEW mysqli('127.0.0.1','root','','bus');
   $bus = $mysqli->query("SELECT * FROM businfo");
   if(mysqli_num_rows($bus) > 0)
   {
       while($info = $bus->fetch_assoc()):?>
       <tr>
         <td><?php echo $info['buscode']; ?></td>
         <td><?php echo $info['servicecode']; ?></td>
         <td><?php echo $info['start']; ?></td>
         <td><?php echo $info['stop']; ?></td>
         <td><?php echo$info['operator']; ?></td>
         <td><?php echo$info['bustype']; ?></td>
         <td><?php echo$info['fare']; ?></td>
         <td><?php echo$info['stime']; ?></td>
         <td><?php echo$info['etime']; ?></td>
         <td>
             <a href="ed.php?id=<?php echo $info['buscode'] ?>"
               class="btn btn-primary">Edit Bus info</a>
         </td>
         <td>
             <a href="de.php?id=<?php echo $info['buscode'] ?>"
               class="btn btn-primary">Delete Bus info</a>
         </td>
       </tr>
     <?php endwhile;
   }
   ?>
   </table>
   <a href="edu.php" class="btn btn-primary">Return</a>
   <a href="buad.php" class="btn btn-primary">Add Bus details</a>
   </div>
   </div>
 </body>
</html>

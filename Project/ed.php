<?php
include 'connection.php';
   if (isset($_GET['id'])) {
   $user = $_GET['id'];
   $g = $mysqli->query("SELECT * FROM businfo WHERE buscode = '$user'");
   $tp = $g->fetch_assoc();
    } else {
    header("Location: index.php");
    }?>
<!DOCTYPE html>
<html>
    <head>
 <meta charset="UTF-8">
 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <title><?php echo $user_data['username'] ?>'s Profile Settings</title>
    </head>
 <body>
   <form method="post" action="ed-action.php?id=<?php echo $tp['buscode'] ?>">
   <div class="container">
   <div class="row justify-content-center">
     <h1>Edit Bus Details</h1>
    <table class="table">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th>Bus Code</th>
          <th>Service Code</th>
          <th>Start</th>
          <th>Destination</th>
          <th>Operator</th>
          <th>Bus Type</th>
          <th>Fare</th>
          <th>Start Time</th>
          <th>Stop Time</th>
          <th colspan="10">Update</th>
        </tr>
      </thead>
   <?php
   if(mysqli_num_rows($g) > 0)
   {
      $n=$tp['buscode'];
      $a=$tp['servicecode'];
      $b=$tp['start'];
      $c=$tp['stop'];
      $d=$tp['operator'];
      $e=$tp['bustype'];
      $g=$tp['fare'];
      $s=$tp['stime'];
      $f=$tp['etime'];
      ?>
       <tr>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td><?php echo "<input type='text' name='buscode' value='$n' />";?></td>
         <td><?php echo "<input type='text' name='servicecode' value='$a' />";?></td>
         <td><?php echo "<input type='text' name='start' value='$b' />";?></td>
         <td><?php echo "<input type='text' name='stop' value='$c' />";?></td>
         <td><?php echo "<input type='text' name='operator' value='$d' />";?></td>
         <td><?php echo "<input type='text' name='bustype' value='$e' />";?></td>
         <td><?php echo "<input type='text' name='fare' value='$g' />";?></td>
         <td><?php echo "<input type='text' name='stime' value='$s'/>";?></td>
         <td><?php echo "<input type='text' name='etime' value='$f'/>";?></td>
         <td>
             <button class="btn btn-primary" value="update">Update</button>
         </td>
       </tr>
     <?php
   }
   ?>
   </table>
   </div>
   </div>
 </form>
 <a href="info.php" class="btn btn-primary">Return</a>
 </body>
</html>

<?php
include 'connection.php';
   if (isset($_GET['user'])) {
   $user = $_GET['user'];
   $get_user = $mysqli->query("SELECT * FROM user WHERE username = '$user'");
   $user_data = $get_user->fetch_assoc();
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
   <form method="post" action="update-profile-action.php?user=<?php echo $user_data['username'] ?>">
   <div class="container">
   <div class="row justify-content-center">
     <h1>Profile</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Age</th>
          <th>Gender</th>
          <th>State</th>
          <th>City</th>
          <th colspan="6">Update</th>
        </tr>
      </thead>
   <?php
   if(mysqli_num_rows($get_user) > 0)
   {
      $n=$user_data['name'];
      $a=$user_data['age'];
      $g=$user_data['gender'];
      $s=$user_data['state'];
      $c=$user_data['city'];
      ?>
       <tr>
         <td><?php echo "<input type='text' name='name' value='$n' />";?></td>
         <td><?php echo "<input type='text' name='age' value='$a' />";?></td>
         <td><?php echo "<input type='text' name='gender' value='$g' />";?></td>
         <td><?php echo "<input type='text' name='state' value='$s'/>";?></td>
         <td><?php echo "<input type='text' name='city' value='$c'/>";?></td>
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
 </body>
</html>

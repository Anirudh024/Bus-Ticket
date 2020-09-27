<?php
include 'connection.php';
session_start();
if (isset($_GET['user']))
{
$user = $_GET['user'];
$get_user = $mysqli->query("SELECT * FROM user WHERE username = '$user'");
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
         <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
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
        <th>Username</th>
        <th>Edit Profile</th>
        <th>Delete Profile</th>
        <th colspan="7">Go Back</th>
      </tr>
    </thead>
 <?php
 if(mysqli_num_rows($get_user) > 0)
 {
     while($profile_data = $get_user->fetch_assoc()):?>
     <tr>
       <td><?php echo $profile_data['name']; ?></td>
       <td><?php echo $profile_data['age']; ?></td>
       <td><?php echo $profile_data['gender']; ?></td>
       <td><?php echo $profile_data['state']; ?></td>
       <td><?php echo$profile_data['city']; ?></td>
       <td><?php echo $profile_data['username']; ?></td>
       <td>
           <a href="edit-profile.php?user=<?php echo $profile_data['username'] ?>"
             class="btn btn-primary">Edit Profile</a>
       </td>
       <td>
           <a href="delete-profile.php?user=<?php echo $profile_data['username'] ?>"
             class="btn btn-primary">Delete Profile</a>
       </td>
       <td>
           <a href="index.php" class="btn btn-primary">Return</a>
       </td>
     </tr>
   <?php endwhile;
 }
 ?>
 </table>
</div>
</div>
    </body>
</html>

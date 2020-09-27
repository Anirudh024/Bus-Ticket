<?php
include 'connection.php';
 $user = $_GET['user'];
 $name = $_POST['name'];
 $age = $_POST['age'];
 $gender = $_POST['gender'];
 $state = $_POST['state'];
 $city = $_POST['city'];
 $update_profile = $mysqli->query("UPDATE user SET name = '$name',
                      gender = '$gender', age = $age, state = '$state', city = '$city'
                      WHERE username = '$user'");
     if ($update_profile) {
    header("Location: profile.php?user=$user");
     } else {
   echo $mysqli->error;
   echo "error";
     }
?>

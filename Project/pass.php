<?php
include 'connection.php';
 $user = $_POST['pass'];
 $update_profile = $mysqli->query("TRUNCATE TABLE admin");
 $con = NEW mysqli('127.0.0.1','root','','bus');
 $sql = $con->query("INSERT INTO admin (pass) VALUES('$user')");
     if ($update_profile) {
    header("Location: index.php");
     } else {
   echo $mysqli->error;
   echo "error";
     }
?>

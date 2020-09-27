<?php
include 'connection.php';
   if (isset($_GET['user'])) {
   $user = $_GET['user'];
   $get_user = $mysqli->query("DELETE FROM user WHERE username = '$user'");
   echo "Account Deleted";
   session_start();
   session_destroy();
   header("refresh:2; url=index.php");

    }?>

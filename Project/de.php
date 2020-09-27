<?php
include 'connection.php';
   if (isset($_GET['id'])) {
   $user = $_GET['id'];
   $get_user = $mysqli->query("DELETE FROM businfo WHERE buscode = '$user'");
   echo "Bus info Deleted";
   session_start();
   session_destroy();
   header("refresh:2; url=info.php");

    }?>

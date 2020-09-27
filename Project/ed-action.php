<?php
include 'connection.php';
 $bus = $_GET['id'];
 $stime = $_POST['stime'];
 $etime = $_POST['etime'];
 $fare = $_POST['fare'];
 $serv = $_POST['servicecode'];
 $bustype = $_POST['bustype'];
 $operator = $_POST['operator'];
 $start = $_POST['start'];
 $stop = $_POST['stop'];
 $update_profile = $mysqli->query("UPDATE  `businfo` SET `buscode` = '$bus',`servicecode` = '$serv', `start` = '$start', `stop` = '$stop', `depo` = '$start', `operator` = '$operator', `bustype` = '$bustype', `fare` = '$fare', `stime` = '$stime', `etime` = '$etime' WHERE buscode = '$bus'");
     if ($update_profile) {
    header("Location: info.php");
     } else {
   echo $mysqli->error;
   echo "error";
     }
?>

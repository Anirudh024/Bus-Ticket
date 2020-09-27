<?php
include 'connection.php';

                  $stime = $_POST['stime'];
                  $etime = $_POST['etime'];
                  $fare = $_POST['fare'];
                  $serv = $_POST['servicecode'];
                  $bus = $_POST['buscode'];
                  $bustype = $_POST['bustype'];
                  $operator = $_POST['operator'];
                  $start = $_POST['start'];
                  $stop = $_POST['stop'];
                  $con = NEW mysqli('127.0.0.1','root','','bus');
                  $sql = $con->query("SELECT * FROM businfo WHERE buscode ='$bus'");
                  if(mysqli_num_rows($sql)>0)
                  {
                    echo "Bus code already exists";
                    header("refresh:2; url=buad.php");
                  }
                  else
                  {
                  $register = $mysqli->query("INSERT INTO `businfo`(`buscode`,`servicecode`, `start`, `stop`, `depo`, `operator`, `bustype`, `fare`, `stime`, `etime`) VALUES ('$bus','$serv','$start','$stop','$start','$operator','$bustype','$fare','$stime','$etime')");

                  if ($register)
                  {
                  echo "Successfully Added";
                  header("refresh:2; url=buad.php");
                  }

else
{
echo $mysqli->error;
}
}
?>

<?php

if(isset($_GET['book']))
{
    $id = $_GET['book'];
    $mysqli =NEW mysqli('127.0.0.1','root','','bus');
    $sql =$mysqli->query("INSERT INTO temp (start,stop,bustype,buscode,servicecode,fare) SELECT start,stop,bustype,buscode,servicecode,fare FROM businfo WHERE buscode ='$id'");
    header("refresh:2; url=re.php");
}

else if(isset($_POST['regi']))
{
  $nof = $_POST['nof'];
  $date = $_POST['date'];
  $mysqli = NEW mysqli('127.0.0.1','root','','bus');
      $sql =$mysqli->query("UPDATE temp SET nof = '$nof' , dat = '$date'");
header("refresh:2; url=ticket.php");
}


 ?>

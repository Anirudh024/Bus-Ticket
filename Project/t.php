<?php

  $mysqli = NEW mysqli('127.0.0.1','root','','bus');
  $sql = $mysqli->query("SELECT nof FROM temp");
  $res = $sql->fetch_assoc();
  for ($i =0; $i < $res['nof']; $i++)
   {
     $name=$_POST['name'][$i];
     $age=$_POST['age'][$i];
     $gender=$_POST['gender'][$i];
     $star=$mysqli->query("INSERT INTO perinfo (name,age,gender) VALUES ('$name','$age','$gender')");
     header("refresh:2; url=end.php");
   }
?>

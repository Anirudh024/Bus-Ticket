<?php
include 'connection.php';
if (isset($_POST['username']))
{
        $username = $_POST['username'];

        $con = NEW mysqli('127.0.0.1','root','','bus');
        $sql = $con->query("SELECT * FROM user WHERE username = '$username'");
        if(mysqli_num_rows($sql) > 0)
        {
          echo "Useranme already exists";
          header("refresh:2; url=registration.php");
        }
        else
        {
                  $password = $_POST['password'];
                  $age = $_POST['age'];
                  $gender = $_POST['gender'];
                  $state = $_POST['state'];
                  $city = $_POST['city'];
                  $name = $_POST['name'];
                  $register = $mysqli->query("INSERT INTO user (username,name,age,gender,state,city,password) VALUES ('$username','$name','$age','$gender','$state','$city','". md5($password)."')");
                  if ($register)
                  {
                  echo "Successfully Registered";
                  header("refresh:2; url=index.php");
                  }
        }
      }
else
{
echo $mysqli->error;
}
?>

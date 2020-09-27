<?php

    $con= mysqli_connect('127.0.0.1','root','');

    if(!$con)
    {
      echo "Not connected to server";
    }

    if(!mysqli_select_db($con,'tutorial'))
    {
      echo "Not selected";
    }

    $user = $_POST['username'];
    $pass =$_POST['password'];

    $query = mysqli_query($con,"SELECT * FROM person WHERE Name='$user' AND Email='$pass'");
	 if(mysqli_num_rows($query) > 0) {
    echo "Welcome";
  }
  else {
    echo "Wrong username or password";
    header("refresh:3; url=front.html");
  }

?>

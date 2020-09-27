<?php
include 'connection.php';
session_start();
if (isset($_POST['username'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$login = $mysqli->query("SELECT * FROM user WHERE username = '$username' AND password = '".md5($password)."'");
if (mysqli_num_rows($login) > 0) {
$_SESSION['username'] = $username;
header("Location: index.php");
} else {
  header("Location: error.php");
echo $mysqli->error;
}
}
?>

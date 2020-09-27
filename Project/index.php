<?php
     include 'connection.php';
    session_start();
 ?>
 <!DOCTYPE html>
 <html>
     <head>
       <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
       <style>
       h4{
         position: absolute;
         font-size: 20px;
         top: 530px;
         left: 490px;
         color: grey;
       }
       h1{
         position: absolute;
         top: 200px;
         left:570px;
         color: grey;
         border-bottom: 6px solid #614caf;
       }
       .topnav {
         overflow: hidden;
         background-color: #333;
       }

       .topnav a {
         float: left;
         color: #f2f2f2;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
         font-size: 17px;
       }

       .topnav a:hover {
         background-color: #ddd;
         color: black;
       }

       .topnav a.active {
         background-color: #4CAF50;
         color: white;
       }
     </style>
  <meta charset="UTF-8">
        <title>BUS TICKET</title>
    </head>
 <body>

     <?php
          if (!isset($_SESSION['username'])) {
     ?>
     <div>
       <h1>Login</h1>
       <div class="form-box">
            <form method="post" action="login-action.php">
            <div class="textbox">
              <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="username" placeholder="Username"/>
          </div>
            <div class="textbox">
              <i class="fa fa-lock" aria-hidden="true"></i>
           <input type="password" name="password" placeholder="Password" id="myInput"/>
           <span class="eye" onclick="myFunction()">
           <i id="hide1" class="fa fa-eye"></i>
           <i id="hide2" class="fa fa-eye-slash"></i>
         </span>
         </div>
           <input class="btn" type="submit" value="Login" />
       </form>
     </div>
   </div>
     <h4>Not a member yet? Click <a href="registration.php">here</a> to register.<h4>
       <script>
          function myFunction(){
            var x = document.getElementById("myInput");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");

            if(x.type === 'password'){
              x.type = "text";
              y.style.display= "block";
              z.style.display= "none";
            }
            else{
              x.type = "password";
              y.style.display= "none";
              z.style.display= "block";
            }
          }
       </script>
      <?php } else
      if (isset($_SESSION['username'])) {
      ?>
        <div class="topnav">
  <a class="active" href="profile.php?user=<?php echo $_SESSION['username'] ?>"><?php echo $_SESSION['username'] ?></a>
  <?php
       if (isset($_SESSION['username']))
       {
         $user = $_SESSION['username'];
     $users = $mysqli->query("SELECT * FROM user WHERE username= '$user'");
          while ($user_data = $users->fetch_assoc()) { ?>
   <a href="profile.php?user=<?php echo $user_data['username'] ?>">View Profile</a>
    <?php }
?>
  <a href="bus.php">Bus ticket booking</a>
    <a href="logout.php">Logout</a>
    <a href="admin.php">Admin</a>
</div>

           <?php }
          ?>
          <div class="form-box">
            <div style="padding-left:16px">
              <h2>Welcome</h2>
              <p>Some content..</p>
            </div>
<?php } ?>
   </div>
 </div>
</div>
 </body>
 </html>

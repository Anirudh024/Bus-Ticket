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
  <meta charset="UTF-8">
        <title>BUS TICKET</title>
        <style>
        h1{
          position: relative;
          top: 250px;
          left: 550px;
          color: grey;
        }
        </style>
    </head>
 <body>

     <div>
       <h1>Admin Access</h1>
       <div class="form-box">
            <form method="post" action="adu.php">
            <div class="textbox">
              <i class="fa fa-lock" aria-hidden="true"></i>
           <input type="password" name="password" placeholder="Password" id="myInput"/>
           <span class="eye" onclick="myFunction()">
           <i id="hide1" class="fa fa-eye"></i>
           <i id="hide2" class="fa fa-eye-slash"></i>
         </span>
         </div>
           <input class="btn" type="submit" value="Login" />
           <a href="index.php" class="btn btn-primary">Return</a>
       </form>
     </div>
   </div>
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

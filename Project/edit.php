    <!DOCTYPE html>
    <html>
        <head>
     <meta charset="UTF-8">
     <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <title>Edit Password</title>
        </head>
     <body>
       <form method="post" action="pass.php">
       <div class="container">
       <div class="row justify-content-center">
         <h1>Profile</h1>
        <table class="table">
          <thead>
            <tr>
              <th>Password</th>
              <th colspan="2">Return</th>
            </tr>
          </thead>
       <?php
       $mysqli = NEW mysqli('127.0.0.1','root','','bus');
       $sql = $mysqli->query("SELECT * FROM admin");
         $info = $sql->fetch_assoc();
          $hi = $info['pass'];
          ?>
           <tr>
             <td><?php echo "<input type='text' name='pass' value='$hi' />";?></td>
             <td>
                 <button class="btn btn-primary" value="update">Update</button>
             </td>
             <td>
                 <a href="edu.php" class="btn btn-primary">Return</a>
             </td>
           </tr>
         <?php
       ?>
       </table>
       </div>
       </div>
     </form>
     </body>
    </html>

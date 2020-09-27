<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booking</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
    <div class="row justify-content-center">
    <form action="process.php" method="POST">
      <div class="form-group">
        <h1>Booking</h1>
        <?php
          $mysqli = NEW mysqli('127.0.0.1','root','','bus');
          $result = $mysqli->query("SELECT DISTINCT start FROM businfo")
         ?>
         <select name='start'>
           <?php
            while($rows = $result->fetch_assoc())
            {
               $start = $rows['start'];
               echo "<option value='$start'>$start</option>";
            }

            ?>
          </br>
        </select>
            <?php
              $result1 = $mysqli->query("SELECT DISTINCT stop FROM businfo")
             ?>
             <select name='stop'>
               <?php
                while($rows1 = $result1->fetch_assoc())
                {
                   $stop = $rows1['stop'];
                   echo "<option value='$stop'>$stop</option>";
                }

                ?>
              </br>
            </select>
                <?php
                  $result2 = $mysqli->query("SELECT DISTINCT bustype FROM businfo")
                 ?>
                 <select name='bustype'>
                   <?php
                    while($rows2 = $result2->fetch_assoc())
                    {
                       $bustype = $rows2['bustype'];
                       echo "<option value='$bustype'>$bustype</option>";
                    }

                    ?>
                  </select>
    </div>
       <div class="form-group">
      <button type="submit" class="btn btn-primary" name="save">Continue</button>
    </div>
  </div>
    </form>
    <form action="index.php">
    <div class="form-group">
   <button type="submit" class="btn btn-primary">Return</button>
</div>
</div>
</form>
  </body>
</html>

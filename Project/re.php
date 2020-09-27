<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booking</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="row justify-content-center">
      <div class="form-group">
        <div class="form-box">
    <form action="add.php" method="POST">
    <div class="textbox">
      <i class="fa fa-user-circle" aria-hidden="true"></i>
 <select name="nof">
   <option value="" disabled selected>Select the number of passengers</option>
   <option value=1>1</option>
   <option value=2>2</option>
   <option value=3>3</option>
 </select></br>
</div>
 <div class="textbox">
   <i class="fa fa-calendar" aria-hidden="true"></i>
<input type="date" name="date"></br>
</div>
<button class="btn btn-primary" name="regi">Register</button>
</form>
</div>
</div>
</div>
  </body>
</html>

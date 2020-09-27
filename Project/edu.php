<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
         <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
 <div class="container">
 <div class="row justify-content-center">
   <h1>Database</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Edit Password</th>
        <th>Bus details</th>
        <th colspan="4">Return</th>
      </tr>
    </thead>
     <tr>
       <td>
         <a href="edit.php"
         class="btn btn-primary">Edit Password</a>
       </td>
       <td>
         <a href="info.php"
         class="btn btn-primary">Bus details</a>
       </td>
       <td>
           <a href="index.php" class="btn btn-primary">Return</a>
       </td>
     </tr>

 </table>
</div>
</div>
    </body>
</html>

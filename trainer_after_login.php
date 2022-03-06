<?php
  include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="member_after_login_style.css">
    <!-- CSS only -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <title>G8 Fitness Centre</title>
</head>

 <section id="purchase-form-section">
     <div class="container my-5" style="padding-bottom:300px;">
     <h3>Trainer TAB</h3>
     
    <table class="table table-bordered my-5">
  <thead>
    <tr>
      <th>List</th>
      <th>Operations</th>
    </tr>
  </thead>
  <tbody>
        <tr>
        <th>Member Details</th>
        <td>
        <button class="btn btn-primary"><a href="member_details.php" class="text-light">View</a></button>
        </td>
      </tr>
      <tr>
        <th>Shift</th>
        <td>
        <button class="btn btn-primary"><a href="member_shift.php" class="text-light">View</a></button>
        </td>
      </tr>
      <tr>
        <th>Specialisation</th>
        <td>
        <button class="btn btn-primary"><a href="purdisplay.php" class="text-light">View</a></button>
        </td>
      </tr>

  </tbody>
</table>
        
        </div>

</body>
</html>
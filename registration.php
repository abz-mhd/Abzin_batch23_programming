<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
<div class="form-container">
    <h2>Registration Form</h2>
    <form action="register.php" method="post">
      
      <label for="Name">Name</label>
      <input type="text" id="Name" name="Name" placeholder="Enter your name" required />
      
      <label for="Address">Address</label>
      <input type="text" id="Address" name="Address" placeholder="Enter your address" required />
      
      <label for="Phone_No">Phone_No</label>
      <input type="tel" id="Phone_No" name="Phone_No" placeholder="Enter your phone number" required />
      
      <label for="Email">Email</label>
      <input type="email" id="Email" name="Email" placeholder="Enter your email" required />
      
      <div style="text-align: center;">
      <button type="submit">Submit</button>
      </div>
      
    </form>  
</div>

<?php
        include 'dbconnection.php';
    ?>
</body>
</html>

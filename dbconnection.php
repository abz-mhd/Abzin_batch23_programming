<?php
$servername = "localhost"; 
$username = "root";              
$password = ""; // Add your database password if you have one
$dbname = "batch23";         

try {
  // Establish connection using PDO
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  // Set PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // If connection is successful
  echo "Connected successfully"; 
} catch (PDOException $e) {
  // If connection fails, show the error message
  echo "Connection failed: " . $e->getMessage();
}
?> 
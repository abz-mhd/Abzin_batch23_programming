<?php

include 'registration.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $Phone_No = $_POST['Phone_No'];
    $Email = $_POST['Email'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement
        $sql = "INSERT INTO students (Name, Address, Phone_No, Email) VALUES (:Name, :Address, :Phone_No, :Email)";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':Name', $Name);
        $stmt->bindParam(':Address', $Address);
        $stmt->bindParam(':Phone_No', $Phone_No);
        $stmt->bindParam(':Email', $Email);

        // Execute the statement
        $stmt->execute();

        echo "Registration successful!";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>

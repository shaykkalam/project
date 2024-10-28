<?php
// Database connection parameters
$servername = "localhost";  // Replace with your server name
$username = "root";         // Replace with your MySQL username
$password = "";             // Replace with your MySQL password
$dbname = "user_registration"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $First Name = $_POST['First Name'];
    $Last Name= $_POST['Last Name'];
    $User Name = $_POST['User Name'];
    $Contact = $_POST['Contact'];
    $Email= $_POST['Email'];
    $Password= $_POST['Password'];


    // Validate form inputs (optional)
    if (empty($username) || empty($email) || empty($password)) {
        die("All fields are required.");
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    INSERT INTO `registration` (`First Name`, `Last Name`, `User Name`, `Contact`, `Email`, `Password`) 
    VALUES ('sdfg', 'prodduturi', 'sabi14', '8688213018', 'sabi@gmai.com', 'qwerty');

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>

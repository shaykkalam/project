<?php
include "connection.php";

// INSERT query
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $First Name = $_POST['First Name'];
    $Last Name= $_POST['Last Name'];
    $User Name = $_POST['User Name'];
    $Contact = $_POST['Contact'];
    $Email= $_POST['Email'];
    $Password= $_POST['Password'];



    
    
    $sql = "INSERT INTO Books (FirstName, LastName, UserName, Contact, Email, Password) VALUES ('$First Name', '$Last Name', $Username, '$Contact','$Email','$Password')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
        }
        
        
        ?>
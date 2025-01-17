<?php
include("connection.php");

if (!empty($username) && !empty($password)) {
    header("Location:login.php");
}
    if (isset($_POST['save_password']) && $_POST['save_password'] == 'on') {
        // Retrieving username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

$conn->close();
?>

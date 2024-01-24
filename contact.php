<?php

// Connect to MySQL database
$servername = "localhost";
$username = "u677922807_contacthead";
$password = "1234567810@#4eE";
$dbname = "u677922807_contact";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process POST data from the client
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if required fields are set
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        // Insert data into MySQL database
        $sql = "INSERT INTO u677922807_contact (name, email, phone) VALUES ('$name', '$email', '$phone')";

        if ($conn->query($sql) === TRUE) {
            echo "Data inserted into MySQL successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error: Please fill out all required fields";
    }
}

$conn->close();

?>
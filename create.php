<?php
// Establish connection to MySQL database
$servername = "localhost";
$username = "username"; // Your MySQL username
$password = "password"; // Your MySQL password
$database = "mydatabase"; // Your MySQL database name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');
// Retrieve data from create form
$name = $_POST['name'];
$email = $_POST['email'];

// Insert data into database
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

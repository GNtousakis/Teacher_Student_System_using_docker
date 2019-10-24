<?php //Connect to the db and then be able to call it with $conn
$dbServername = "mysql";	//because of docker here is mysql the name i gave in dockercompose
$dbUsername = "root";
$dbPassword = "root";
$dbname = "mysql";	//The name of the database

// Create connection
$conn = new mysqli($dbServername, $dbUsername, $dbPassword,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
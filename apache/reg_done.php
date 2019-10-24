<?php include_once 'includes/dbconnect.php';
	$name= $_GET["name"];
	$surname= $_GET["surname"];
	$username= $_GET["username"];
	$password= $_GET["password"];
	$email= $_GET["email"];


	$sql= "INSERT INTO Teachers (name,surname,username,password,email)
	VALUES ('$name','$surname','$username','$password','$email')";
	if ($conn->query($sql) === TRUE) {
		header("Location: index.php");
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;  
    	header("Location: register.php");			
	}
?>

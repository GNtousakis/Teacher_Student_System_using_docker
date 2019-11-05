<?php include_once 'includes/dbconnect.php';
	$name= $_POST["name"];
	$surname= $_POST["surname"];
	$username= $_POST["username"];
	$password= $_POST["password"];
	$email= $_POST["email"];


	$sql= "INSERT INTO Teachers (name,surname,username,password,email)
	VALUES ('$name','$surname','$username','$password','$email')";
	if ($conn->query($sql) === TRUE) {
		header("Location: index.php");
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;  
    	header("Location: register.php");			
	}
?>

<?php 
    include_once 'includes/dbconnect.php';
    include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>We love teachers</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/style_2.css" />
</head>
<body>

	<ul>
      <li><a class="active" href="teacher.php">Home</a></li>
      <li><a href="addstudent.php">Add</a></li>
      <li><a href="editstudent.php">Edit</a></li>
      <li><a href="deletestudent.php">Delete</a></li>
      <li><a href="searchstudent.php">Search</a></li>
      <div class="right">
        <li><a href=""><?php echo $_SESSION['name'] . " " . $_SESSION['surname']; ?></a></li>
        <li><a href="logout.php">Logout</a></li>
      </div>
  </ul>
  <br><br>
	<h1 align="center">Welcome teacher!!!</h1><br>
  <h2 align="center">This is the student management system</h2><br>
  <h3 align="center">You can Add,Edit,Search and Delete Students</h3><br><br>
  <img src="tuc.png" alt="Tuc" class="center">
</body>
</html>

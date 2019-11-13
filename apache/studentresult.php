<?php 
	include_once 'includes/dbconnect.php';
    include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Result Student</title>
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

	<div class="container">
    <section id="content">
        <form action="" method="post">
            <h1 id="demo">Student Details</h1>
            <h2 align="left">Name: <?php echo $_SESSION['stname'];?></h2> 
            <h2 align="left">Surname: <?php echo $_SESSION['surname'];?></h2>
            <h2 align="left">Fathername:  <?php echo $_SESSION['fathername'];?></h2>
            <h2 align="left">Grade:  <?php echo $_SESSION['grade'];?></h2>
            <h2 align="left">Mobile:  <?php echo $_SESSION['mobile'];?></h2>
            <h2 align="left">Date:  <?php echo $_SESSION['date'];?></h2>
            <br /><br />
        </form>     
    </section>
  </div>

</body>
</html>
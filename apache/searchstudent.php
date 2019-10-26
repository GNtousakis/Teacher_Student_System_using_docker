<?php 
    include_once 'includes/dbconnect.php';
    include("auth.php");

    include_once 'includes/dbconnect.php';
    include("auth.php");

    if (isset($_REQUEST['name'])){
      $name = stripslashes($_REQUEST['name']);
      $name = mysqli_real_escape_string($conn,$name); 
      $surname = stripslashes($_REQUEST['surname']);
      $surname = mysqli_real_escape_string($conn,$surname);
      $sql = "SELECT * FROM students WHERE name='$name'
              and surname='$surname'";      
      $result = mysqli_query($conn,$sql);
      if($result != FALSE)    $rows = mysqli_num_rows($result);
        if($rows==1){
            $rows= mysqli_query($conn,$sql)->fetch_assoc();
            echo "The data of the student is " . $rows["name"] . " " . $rows["surname"] . " " 
                . $rows["fathername"];  
        }
        else{
            echo "<script language=\"javascript\">
                      alert(\"Wrong name or password... try again!\");
                  </script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search for a student</title>
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
            <h1 id="demo">Search Student</h1>
            <div>
                <input type="text" placeholder="Name" required="" name="name" />
            </div>
            <div>
                <input type="text" placeholder="Surname" required="" name="surname" />
            </div>
            <div>
                <input type="submit" value="Delete"/>
            </div>
        </form>     
    </section>
  </div>
</body>
</html>
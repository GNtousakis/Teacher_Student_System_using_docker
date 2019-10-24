<?php
	include_once 'includes/dbconnect.php';
	include("auth.php");

    if (isset($_REQUEST['name'])){
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($conn,$name); 
    $surname = stripslashes($_REQUEST['surname']);
    $surname = mysqli_real_escape_string($conn,$surname);
    $fathername = stripslashes($_REQUEST['fathername']);
    $fathername = mysqli_real_escape_string($conn,$fathername);
    $grade = $_REQUEST['grade'];
    $mobile = stripslashes($_REQUEST['mobile']);
    $mobile = mysqli_real_escape_string($conn,$mobile);
    $date = $_REQUEST['birth'];
        $sql = "INSERT into students (name, surname, fathername, grade,mobilenumber,birthday)
                    VALUES ('$name', '$surname', '$fathername', '$grade', '$mobile', '$date')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: teacher.php");
        }else{
            echo "<script language=\"javascript\">
                      alert(\"Problem... try again!\");
                  </script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add students</title>	
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
            <h1 id="demo">Student Register Form</h1>
            <div>
                <input type="text" placeholder="Name" required="" name="name" />
            </div>
            <div>
                <input type="text" placeholder="Surname" required="" name="surname" />
            </div>
            <div>
                <input type="text" placeholder="Father Name" required="" name="fathername" />
            </div>
            <div>
                <input type="number" step="0.1" placeholder="Grade" required="" name="grade" />
            </div>
            <div>
                <input type="text" placeholder="Mobile Number" required="" name="mobile" />
            </div>
            <div>
                <input type="date" placeholder="Birthday" required="" name="birth" />
            </div>
            <div>
                <input type="submit" value="Register!!!"/>
            </div>
        </form><!-- form -->
        
    </section><!-- content -->
</div><!-- container -->


</body>
</html>
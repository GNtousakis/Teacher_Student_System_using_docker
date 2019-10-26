<?php
    include_once 'includes/dbconnect.php';
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn,$username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn,$password);

        $sql = "SELECT * FROM Teachers WHERE username='$username'
        and password='$password'";
        $result = $conn->query($sql);
        if($result != FALSE)    $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['username'] = $username;

            $sql = "SELECT name FROM Teachers WHERE username='$username'
            and password='$password'";
            $sql1 = "SELECT surname FROM Teachers WHERE username='$username'
            and password='$password'";
            $name = $conn->query($sql)->fetch_assoc();
            $surname= $conn->query($sql1)->fetch_assoc();
            $_SESSION['name']=$name["name"];
            $_SESSION['surname']= $surname["surname"];
            header("Location: teacher.php");
        }
        else{
            echo "<script language=\"javascript\">
                      alert(\"Wrong name or password... try again!\");
                  </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
<script src="myScript.js"></script> 
<meta charset="utf-8">
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/style_2.css" />

</head>
<body>

<ul>
        <li><a class="active" href="index.php">Home</a></li>
      <div class="right">
        <li><a href="">Login</a></li>
        <li><a href="register.php">Register</a></li>
      </div>
</ul>

<div class="container">
    <section id="content">
        <form action="" method="post" name="login">
            <h1 id="demo">Login Form</h1>
            <div>
                <input type="text" placeholder="Username" required="" name="username" />
            </div>
            <div>
                <input type="password" placeholder="Password" required="" name="password" />
            </div>
            <div>
                <input type="submit" value="Log in" id="login_but"/>
                <a href="register.php">Register</a>
            </div>
        </form><!-- form -->
        
    </section><!-- content -->
</div><!-- container -->
</body>
</html>



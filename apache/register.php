<?php
    include_once 'includes/dbconnect.php'
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
<script src="myScript.js"></script> 
<meta charset="utf-8">
<title>Teacher Register Page</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div class="container">
    <section id="content">
        <form action="reg_done.php" method="get">
            <h1 id="demo">Register Form</h1>
            <div>
                <input type="text" placeholder="Name" required="" name="name" />
            </div>
            <div>
                <input type="text" placeholder="Surname" required="" name="surname" />
            </div>
            <div>
                <input type="text" placeholder="Username" required="" name="username" />
            </div>
            <div>
                <input type="password" placeholder="Password" required="" name="password" />
            </div>
            <div>
                <input type="text" placeholder="Email" required="" name="email" />
            </div>
            <div>
                <input type="submit" value="Register!!!"/>
            </div>
        </form><!-- form -->
        
    </section><!-- content -->
</div><!-- container -->
</body>
</html>



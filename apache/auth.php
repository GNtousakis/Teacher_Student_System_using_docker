<?php 	//We use that to check if we are logged in 
session_start();
if(!isset($_SESSION["username"])){	//if the username is empty then we are not logged in
header("Location: index.php");	//if not logged in we go back to the index page 
exit(); }
?>
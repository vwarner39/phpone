<?php

#requesting connection to database
require_once("connection.php");

#insert the details of customer
$query="INSERT INTO `details` (`col_fname`, `col_lname`, `col_email`, `col_password`) VALUES ('".$_REQUEST["first_name"]."','".$_REQUEST["last_name"]."','".$_REQUEST["email"]."','".md5($_REQUEST["password"])."')";

#to execute the query
mysqli_query($connection_db,$query);
header('Location:show_all_users3.php');
// this will show output in browser
// echo $_REQUEST['first_name'].'<br>'.$_REQUEST['last_name'].'<br>'.$_REQUEST['email'].'<br>'.$_REQUEST['password'];
?>



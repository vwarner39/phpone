<?php
#database details
$hostname="localhost";
$username="root";
$password="";
$databasename="signup_details";

#to connect database
$connection_db=mysqli_connect($hostname,$username,$password,$databasename);

echo "DB connection successful<br>";

?>
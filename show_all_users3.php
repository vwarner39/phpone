<?php
require_once("connection.php");

$qry_sel="SELECT * FROM `details`";

$result=mysqli_query($connection_db,$qry_sel);

while($row=mysqli_fetch_array($result))
{
    echo $row[1]."<br>";
}

?>
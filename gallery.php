<?php
require_once("connection.php");
session_start();
$qry_sel="SELECT * FROM `uploaddetails` WHERE `col_user_name` LIKE '".$_SESSION['customer_session']."'";
//echo $qry_sel;
$result=mysqli_query($connection_db,$qry_sel);

while($row=mysqli_fetch_array($result))
{
    ?>
        <img src="<?php echo "server_side_files/$row[1]";?>">
        
    <?php
  
}

?>

<!-- <?php
session_start();
//Moving physical file from client to server machine 
$directory="server_side_files/";
$filename= $_FILES['fileToUpload']['name'];
$target=$directory."$filename";
$source=$_FILES['fileToUpload']['tmp_name'];
move_uploaded_file($source,$target);

//Make an entry in Database
require_once("connection.php");
$qry_ins="INSERT INTO `uploaddetails` (`col_filename`, `col_user_name`) VALUES ('".$filename."','".$_SESSION['customer_session']."')";
mysqli_query($connection_db,$qry_ins);
?>

<img src="<?php echo $target;?>"> -->

<!-- multiple files -->
<?php
$countfiles = count($_FILES['fileToUpload']['name']);
 
 // Looping all files
 for($i=0;$i<$countfiles;$i++){
   $filename = $_FILES['fileToUpload']['name'][$i];
   
   // Upload file
   $new=move_uploaded_file($_FILES['fileToUpload']['tmp_name'][$i],'server_side_files/'.$filename);
    
 }
 
 echo $countfiles;
?>

<img src="<?php echo 'server_side_files/'.$filename;?>">
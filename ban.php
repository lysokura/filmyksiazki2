<?php
require('db.php');
require('sesja.php');
$uzytkownik=$_SESSION['uzytkownik'];
$query=mysqli_query($con,"SELECT * FROM `users` WHERE `admin` = 1 && `uzytkownik` = '$uzytkownik'");
$num_rows = mysqli_num_rows($query);
if ($num_rows == 1){
$id=$_REQUEST['id'];
$result = mysqli_query($con,"UPDATE users SET ban = 1 WHERE id='$id';");
header("Location: admin_panel.php"); 
}
else echo " nie jestes adminem";

?>
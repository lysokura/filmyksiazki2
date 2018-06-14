<?php
require('db.php');
$query=mysqli_query($con,"SELECT * FROM users WHERE admin = 1");
$num_rows = mysqli_num_rows($query);
if ($num_rows == 1){
$id=$_REQUEST['id'];
$result = mysqli_query($con,"DELETE FROM ksiazkifilmy WHERE id=$id");
header("Location: admin_panel.php"); 
}
else echo " nie jestes adminem";

?>
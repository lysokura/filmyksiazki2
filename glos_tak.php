<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "UPDATE ksiazkifilmy SET glosy = glosy + 1 WHERE id='$id';"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: index.php"); 
?>
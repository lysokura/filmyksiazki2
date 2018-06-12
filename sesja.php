<?php
session_start();
if(!isset($_SESSION["uzytkownik"])){
header("Location: login.php");
exit(); }
?>
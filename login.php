<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style2.css" />
</head>
<body>
<?php
require('db.php');
session_start();
if (isset($_POST['uzytkownik'])){
	$uzytkownik = stripslashes($_REQUEST['uzytkownik']);
	$uzytkownik = mysqli_real_escape_string($con,$uzytkownik);
	$haslo = stripslashes($_REQUEST['haslo']);
	$haslo = mysqli_real_escape_string($con,$haslo);
	$query = mysqli_query($con,"SELECT * FROM `users` WHERE uzytkownik='$uzytkownik' and haslo='".md5($haslo)."'") or die(mysql_error());
	$num_rows = mysqli_num_rows($query);
        if($num_rows==1){
	    $_SESSION['uzytkownik'] = $uzytkownik;
	    header("Location: index.php");
         }else{
	echo "<div class='main'>
<h3>Sprawdz login i hasło</h3>
<br/><a href='login.php'>Zaloguj sie</a></div>";
	}
    }else{
?>
<div class="main">
<h1>Zaloguj się</h1>
<form action="" method="post" name="login">
<p><input type="text" name="uzytkownik" placeholder="uzytkownik" required /></p>
<p><input type="password" name="haslo" placeholder="haslo" required /></p>
<p><input name="submit" type="submit" value="Login" /></p>
</form>
<p><a href='rejestruj.php'>Zarejestruj się</a></p>
</div>
<?php } ?>
</body>
</html>
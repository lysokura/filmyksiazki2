<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Rejestracja</title>
<link rel="stylesheet" href="css/style2.css" />
</head>
<body>
<?php
require('db.php');
if (isset($_REQUEST['uzytkownik'])){
	$uzytkownik = stripslashes($_REQUEST['uzytkownik']);
	$uzytkownik = mysqli_real_escape_string($con,$uzytkownik); 
	$query=mysqli_query($con,"SELECT * FROM users WHERE uzytkownik = '$uzytkownik'");
$num_rows = mysqli_num_rows($query);
if ($num_rows == 0){
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$haslo = stripslashes($_REQUEST['haslo']);
	$haslo = mysqli_real_escape_string($con,$haslo);
        $query = "INSERT into `users` (uzytkownik, haslo, email)
VALUES ('$uzytkownik', '".md5($haslo)."', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='main'>
<h3>Zarejestrowales sie poprawnie</h3></div>";
        }
		}
		else echo "jest juz taki uzytkownik";
		
		
    }else{
?>
<div class="main">
<h1>Rejestracja</h1>
<form name="rejestracja" action="" method="post">
<input type="text" name="uzytkownik" placeholder="uzytkownik" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="haslo" placeholder="haslo" required />
<input type="submit" name="submit" value="Rejestruj" />
</form>
</div>
<?php } ?>
</body>
</html>
<?php
require('db.php');
include("sesja.php");
if(isset($_POST['nowywpis']) && $_POST['nowywpis']==1){
$uzytkownik=$_SESSION['uzytkownik'];
$query=mysqli_query($con,"SELECT * FROM users WHERE ban = 1 && `uzytkownik` = '$uzytkownik'");
$num_rows = mysqli_num_rows($query);
if ($num_rows == 0){
    $rodzaj =$_REQUEST['rodzaj'];
    $nazwa =$_REQUEST['nazwa'];
    $opis = $_REQUEST['opis'];
    $autor = $_SESSION["uzytkownik"];
    mysqli_query($con,"insert into ksiazkifilmy
    (`rodzaj`, `nazwa`,`opis`,`autor`)values
    ('$rodzaj','$nazwa','$opis','$autor')");
    echo "<div class='main'>
<h3>Dodano pomyślnie</h3></div>";
	}
	else echo "<div class='main'>
	<h3>Ban na dodawanie</h3></div>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style2.css" />
</head>
<body>
<div class="main">
<p><a href="index.php">Strona główna</a> </p>
<div>
<h1>Dodaj wpis</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="nowywpis" value="1" />
<p><select name="rodzaj">
   <option value="ksiazka">Ksiazka</option>
   <option value="film">Film</option>
</select></p>
<p><input type="text" name="nazwa" placeholder="Nazwa" required /></p>
<p><input type="text" name="opis" maxlength="10" placeholder="Opis[max długość 10 znaków]"/></p>
<p><input name="submit" type="submit" value="Dodaj" /></p>
</form>
</div>
</div>
</body>
</html>
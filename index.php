<?php
require('db.php');
include("sesja.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Strona główna</title>
<link rel="stylesheet" href="css/style2.css" />
</head>
<body>
<div class="main">
<p>Zalogowany jako<?php echo $_SESSION['uzytkownik']; ?></p>
<p><a href="dodaj.php" target="_blank">Dodaj wpis</a> ~~
<a href="admin_panel.php" target="_blank">Panel admina</a></p>

<?php
$query = mysqli_query($con,"SELECT * FROM ksiazkifilmy ORDER BY id desc;");
while($row = mysqli_fetch_assoc($query)) { ?>
<div><?php echo $row["id"]; ?> |
<?php echo $row["rodzaj"]; ?> |
<?php echo $row["nazwa"]; ?> |
<?php echo $row["opis"]; ?> |

<a href="glos_tak.php?id=<?php echo $row["id"]?>"><img src="img/plus.png";></a><?php echo $row["glosy"]; ?>


<a href="glos_nie.php?id=<?php echo $row["id"]; ?>"><img src="img/minus.png";></a><?php echo $row["glosy_ujemne"]; ?></div>

<?php } ?>
<p><a href="wyloguj.php">Wyloguj</a></p>
</div>
</body>
</html>
<?php
require('db.php');
include("sesja.php");

?>

<?php
$query=mysqli_query($con,"SELECT * FROM users WHERE admin = 1");
$num_rows = mysqli_num_rows($query);
if ($num_rows == 1){ ?>
        <html>
<head>
<meta charset="utf-8">
<title>Panel admina</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<br /><br /><br /><br />
<h1>Użytkownicy</h1>
<table width="100%" border="1" style="border-collapse:collapse;">

<tbody>
<?php
$query = mysqli_query($con,"SELECT * from users ORDER BY id desc;");
while($row = mysqli_fetch_assoc($query)) { ?>
<tr>
<td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["uzytkownik"]; ?></td>
<td align="center"><?php echo $row["ban"]; ?></td>
<td align="center">
<a href="ban.php?id=<?php echo $row["id"]; ?>">Zbanuj</a>
</td>
<td align="center">
<a href="unban.php?id=<?php echo $row["id"]; ?>">Odbanuj</a>
</td>
<td align="center">
<a href="usun_uzytkownika.php?id=<?php echo $row["id"]; ?>">Usuń</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<br />
<h1>Wpisy</h1>
<table width="100%" border="1" style="border-collapse:collapse;">

<tbody>
<?php
$query = mysqli_query($con,"SELECT * from ksiazkifilmy ORDER BY id desc;");
while($row = mysqli_fetch_assoc($query)) { ?>
<tr><td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["rodzaj"]; ?></td>
<td align="center"><?php echo $row["nazwa"]; ?></td>
<td align="center"><?php echo $row["opis"]; ?></td>
<td align="center">
<a href="edytuj.php?id=<?php echo $row["id"]; ?>">Edytuj</a>
</td>
<td align="center">
<a href="usun_wpis.php?id=<?php echo $row["id"]; ?>">Usuń</a>
</td>
<td align="center"><?php echo $row["glosy"]; ?></td>
<td align="center"><?php echo $row["glosy_ujemne"]; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>
<?php  }
else echo "nie jestes adminem"; ?>
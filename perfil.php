<?php 
include 'banco.php';
extract($_POST);
$insert = mysqli_query($link, "INSERT INTO rank (nome, pont) VALUES ('$nome', '$pont')");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
</head>
<body>
<?php  
	$sql = "SELECT * FROM rank";
    $resultado = mysqli_query($link, $sql);
    while ($row = $resultado->fetch_array(MYSQLI_ASSOC)):
?>

<ul>
	<li><?php echo $row['nome']; ?>: <?php echo $row['pont']?></li>
</ul>
<?php endwhile; ?>
<a href="index.php">Voltar</a>
</body>
</html>
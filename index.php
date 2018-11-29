<!DOCTYPE>
<html>
<?php require 'banco.php';
	$query = "select * from quiz";
	$result = $link->query($query) or die($link->error._LINE_);
	$total = $result->num_rows;
?>
<head>
<title>Matematicando</title>

</head>
<body><center>
<div class="title">Matematicando</div>
 															
<div class="bump"><br><form> <button class="button"><span><a href="questao.php?n=1">START QUIZ</a></span></button> </form></div>

</center>
</body>
</html>
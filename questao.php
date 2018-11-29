<?php require 'banco.php';
	  session_start();

	  $number = (int) $_GET['n'];

	  $query = "select * from quiz";
	  $result = $link->query($query) or die($link->error._LINE_);
	  $total = $result->num_rows;

	  $query = "select * from quiz where id = '$number'";

	  $result = $link->query($query) or die ($link->error._LINE_);
	  $questao = $result->fetch_assoc();

	  ?>
	 <!DOCTYPE html>
	 <html>
	 <head>
	 	<title>Matematicando</title>
	 </head>
	 <body>
	 <div>
	 	<h1>Quiz</h1>
	 </div>

	 <div>Questão <?php echo $number;?> de <?php echo $total;?></div>
	 <p><?php echo $questao['que']; ?></p>
	 <form method="post" action="processa.php">
	 	<ul>
	 		<li>
	 			<input type="radio" name="escolha" value="<?php echo $questao['option 1'];?>">
	 			<?php echo $questao['option 1']; ?>
	 		</li>
	 		<li>
	 			<input type="radio" name="escolha" value="<?php echo $questao['option 2'];?>">
	 			<?php echo $questao['option 2']; ?>
	 		</li>
	 		<li>
	 			<input type="radio" name="escolha" value="<?php echo $questao['option 3'];?>">
	 			<?php echo $questao['option 3']; ?>
	 		</li>
	 		<li>
	 			<input type="radio" name="escolha" value="<?php echo $questao['option 4'];?>">
	 			<?php echo $questao['option 4']; ?>
	 		</li>
	 	</ul>
	 	<input type="submit" value="Próxima" />
	    <input type="hidden" name="number" value="<?php echo $number; ?>" />
	 		
	 </form>
	 
	 </body>
	 </html>


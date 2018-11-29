<?php include "banco.php"; ?>
<?php session_start(); ?>
<?php $pont = $_SESSION['score']; ?>
<?php
	//Create Select Query
	//$query="select * from shouts order by time desc limit 100";
	//$shouts = mysqli_query($link,$query);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Matematicando</title>
    
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container">
          <h1>Matematicando</h1>
	</div>
      </header>


      <main>
	<div class="container">
	     <p>Sua pontuação <?php echo $_SESSION['score']; ?></p>
       
       <form method="post" action="perfil.php">Digite seu nome: <input type="text" name="nome"><input type="hidden" name="pont" value="<?php $pont; ?>">
        <button>Rank</button>
       </form>
       
       <a href="questao.php?n=1" class="start">Jogue novamente</a>
	     <?php session_destroy(); ?>

	</div>
      </main>

  </body>
</html>
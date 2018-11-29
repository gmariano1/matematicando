<?php include 'banco.php'; ?>
<?php session_start(); ?>
<?php 
      //Check to see if score is set_error_handler
	if (!isset($_SESSION['score'])){
	   $_SESSION['score'] = 0;
	}
//Check if form was submitted
if($_POST){
	$number = $_POST['number'];
	$selected_choice = $_POST['escolha'];
	$next=$number+1;
	$total=4;
	//Get total number of questions
	$query="SELECT * FROM `quiz`";
	$results = $link->query($query) or die($link->error.__LINE__);
	$total=$results->num_rows;
	//Get correct choice
	$q = "select * from `quiz` where id = $number";
	$result = $link->query($q) or die($link->error.__LINE__);
	$row = $result->fetch_assoc();
	$correct_choice=$row['ans'];
	//compare answer with result
	if($correct_choice == $selected_choice){
		$_SESSION['score']++;
	}
	if($number == $total){
		header("Location: final.php");
		exit();
	} else {
	        header("Location: questao.php?n=".$next."&score=".$_SESSION['score']);
	}
}
?>
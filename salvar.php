<?php 
	date_default_timezone_set('America/Sao_Paulo');
	$nome = $_POST['nome'];
	$matricula = $_POST['matricula'];
	$pergunta1 = $_POST['pergunta1'];
	$pergunta2 = $_POST['pergunta2'];
	$pergunta3 = $_POST['pergunta3'];
	$pergunta4 = $_POST['pergunta4'];
	$pergunta5 = $_POST['pergunta5'];
	$pergunta6 = $_POST['pergunta6'];
	$pergunta7 = $_POST['pergunta7'];
	$pergunta8 = $_POST['pergunta8'];
	$data_criacao = date("Y-m-d H:i:s");

	$conexao_bd = new mysqli("localhost",
	"root","","frequencia_aluno") or die("Erro ao conectar com o bd");
	
	$sql = "INSERT INTO 
	feedback(
		nome , 
		matricula , 
		pergunta1 , 
		pergunta2 , 
		pergunta3 , 
		pergunta4 , 
		pergunta5 , 
		pergunta6 , 
		pergunta7 , 
		pergunta8 , 
		data_criacao
	)
	VALUES(
		'$nome' , 
		'$matricula' , 
		'$pergunta1' , 
		'$pergunta2' , 
		'$pergunta3' , 
		'$pergunta4' , 
		'$pergunta5' , 
		'$pergunta6' , 
		'$pergunta7' , 
		'$pergunta8' , 
		$data_criacao
	);";

	echo "<pre>";
	print_r($sql);
	echo "</pre>";exit;
	// $result = mysqli_query($conexao_bd, $sql) ;

	// header("refresh:0, index.php");
?>


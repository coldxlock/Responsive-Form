<?php 
	date_default_timezone_set('America/Sao_Paulo');
	

	require_once 'config.php';

	
	foreach ($_POST as $key => $post) {
		$new_post[$key] = str_replace("'","",str_replace('"',"",$post));
		
	}

	$nome 		= $new_post['nome'];
	$matricula 	= $new_post['matricula'];
	$pergunta1 	= $new_post['pergunta1'];
	$pergunta2 	= $new_post['pergunta2'];
	$pergunta3 	= $new_post['pergunta3'];
	$pergunta4 	= $new_post['pergunta4'];
	$pergunta5 	= $new_post['pergunta5'];
	$pergunta6 	= $new_post['pergunta6'];
	$pergunta7 	= $new_post['pergunta7'];
	$pergunta8 	= $new_post['pergunta8'];
	$data_criacao = date("Y-m-d H:i:s");

	
	

	
	
	$sql = "INSERT INTO 
	feedback(
		nome , 
		matricula , 
		disciplina , 
		curso , 
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
		'$disciplina' , 
		'$curso' , 
		'$pergunta1' , 
		'$pergunta2' , 
		'$pergunta3' , 
		'$pergunta4' , 
		'$pergunta5' , 
		'$pergunta6' , 
		'$pergunta7' , 
		'$pergunta8' , 
		'$data_criacao'
	);";

	// echo "<pre>";
	// print_r($sql);
	// echo "</pre>";
	// exit;

	
	$result = mysqli_query($conexao_bd, $sql) ;
	
	if ($result){
		echo "<h1>Processando...</h1>";
		header("refresh:0, msg-sucesso.php");
	} else {
		echo "Houve um erro";
	}
	
?>


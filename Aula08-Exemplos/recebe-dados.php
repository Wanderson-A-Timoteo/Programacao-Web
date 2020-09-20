<?php

	//$_POST e $_GET
	
	//print_r($_POST);
	
	$nome = $_POST['nome'];
	$rga  = $_POST['rga'];
	
	echo "<strong>Nome: </strong>".$nome;
	echo "<br />";
	echo "<strong>RGA: </strong>".$rga;
	
	

?>
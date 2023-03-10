<?php

    if ($_SERVER["REQUEST_METHOD"] === 'POST') {   

      $msgMedia = "";  
    	$msgResultado = ""; 	 

	    function calcMedia($n1, $n2){
	        $media = ($n1+$n2)/2;
	        return $media;
	    }

	    $n1 = $_POST["nota1"];
	    $n2 = $_POST["nota2"];

	    if (trim($n1) == "") {
	      $msgN1 = "A nota 1 é obrigatória";	      
	      $msgN2 = ""; 	 
	    }
	    elseif (trim($n2) == "") {
	    	  $msgN1 = ""; 
          $msgN2 = "A nota 2 é obrigatória";	          
	    } else {

	    	$msgN1 = ""; 
	      $msgN2 = ""; 

	      $media = calcMedia($n1,$n2);

	      $msgMedia = "Média = " . $media . "<br>"; //LINHA NOVA	 

	      if ($media >= 6.0) {
	          $msgResultado = "<span id='aprovado'>APROVADO!</span>"; //LINHA NOVA	 
	      } else {
	          $msgResultado = "<span id='reprovado'>REPROVADO</span>"; //LINHA NOVA	 
	      }
	  }

    //TRECHO NOVO
    } else {
    	$msgMedia = "";
    	$msgResultado = "";
	    $msgN1 = "";  
	    $msgN2 = "";  
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
	      #warning {
	        color: red;
	      }

	      #reprovado {
	          background-color: red;
	          color: white;
	          font-weight: bold;
	      }

	      #aprovado {
	          background-color: green;
	          color: white;
	          font-weight: bold;
	      }
	</style>

	<title>Cálculo de Média</title>
</head>
<body>

	<h1>Cálculo de Média</h1>

	<form method="post">
		
		Nota 1:<br>
		<input type="text" name="nota1"><br>
		<span id="warning">
			<small><?= $msgN1; ?></small>
		</span>

		<br><br>

		Nota 2:<br>
		<input type="text" name="nota2"><br>
		<span id="warning"><small><?= $msgN2; ?></small></span>

		<br><br>

		<input type="submit" value="Calcular">

	</form>

	<hr>

  <?= $msgMedia; ?>
  <br>
  <?= $msgResultado; ?>

</body>
</html>
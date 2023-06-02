<?php
    /*conexaoBD.php*/

    try{
        //conexao PDO //IP, nomeBD, usuario, senha
        //$db = 'mysql:host=localhost;dbname=escola;charset=utf8';
        $db = 'mysql:host=localhost;dbname=banco;charset=utf8'; //nome do banco
        $user = 'banco';
        $passwd = 'senha';
        $pdo = new PDO($db, $user, $passwd); 

        //ativar o depurador de erros para gerar exceptions em caso de erros
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
    } catch (PDOException $e){
        $output = 'Impossivel conectar BD : ' . $e . '<br>';
        echo $output;
    }
?>
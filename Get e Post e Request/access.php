<?php
if($_REQUEST){
    $login = $_REQUEST['login'];
    $senha = $_REQUEST['senha'];

    echo 'Login: '. $login . '<br>';
    echo 'Senha: ' . $senha . '<br>';
    echo 'Id: ' . $_REQUEST['id'];
}
?>
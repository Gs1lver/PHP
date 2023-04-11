<?php
if($_POST){
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    echo 'login: '. $login . '<br>';
    echo 'senha' . $senha . '<br>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get e Post - PHP</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="login">
        <br><br>
        <input type="password" name="senha" placeholder="senha">
        <br><br>
        <input type="submit">
    </form>
</body>
</html>
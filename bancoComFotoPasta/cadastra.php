<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD - Controle de alunos</title>

    <style>
        #sucess {
            color: green;
            font-weight: bold;
        }

        #error {
            color: red;
            font-weight: bold;
        }

        #warning {
            color: orange;
            font-weight: bold;
        }
    </style>

</head>

<body>

    <a href="index.html">Home</a>
    <hr>

    <h2>Cadastro de Alunos</h2>
    <div>
        <form method="post" enctype="multipart/form-data">

            RA:<br>
            <input type="text" size="10" name="ra"><br><br>

            Nome:<br>
            <input type="text" size="30" name="nome"><br><br>

            Curso:<br>
            <select name="curso">
                <option></option>
                <option value="Edificações">Edificações</option>
                <option value="Enfermagem">Enfermagem</option>
                <option value="GeoCart">Geodésia e Cartografia</option>
                <option value="Informática">Informática</option>
                <option value="Mecânica">Mecânica</option>
                <option value="Qualidade">Qualidade</option>
            </select><br><br>

            <input type="file" name="foto" accept="image/gif, image/png, image/jpg, image/jpeg"><br><br>
            <input type="submit" value="Cadastrar">

            <hr>

        </form>
    </div>

</body>

</html>

<?php

include("conexaoBD.php");
define('TAMANO_MAXIMO', (2 * 1024 * 1024)); //2MiB
//inserindo dados

if ($_SERVER["REQUEST_METHOD"] === 'POST') {


    try {
        $ra = $_POST["ra"];
        $nome = $_POST["nome"];
        $curso = $_POST["curso"];

        //upload dir
        $uploadDir = 'uploads/fotos/'; //diretorio de upload

        //fotinho
        $foto = $_FILES['foto'];
        $nomeFoto = $foto['name'];
        $tipoFoto = $foto['type'];
        $tamanhoFoto = $foto['size'];

        //gerando novo nome para a foto
        $info = new SplFileInfo($nomeFoto);
        $extensaoArq = $info->getExtension();
        $novoNomeFoto = $ra . "." . $extensaoArq;

        if ((trim($ra) == "") || (trim($nome) == "")) {
            echo "<span id='warning'>RA e nome são obrigatórios!</span>";

            //validação tipo de arquivo
        } else if (($nomeFoto != "") && (!preg_match('/^image\/(jpg|jpeg|png|gif)$/', $tipoFoto))) {
            echo "<span id='warning'>Formato de imagem inválido!</span>";

            //validação tamanho de arquivo
        } else if ($tamanhoFoto > TAMANO_MAXIMO) {
            echo "<span id='warning'>A imagem deve possuir no maximo 2 MiB</span>";
        } else {

            //verificando se o RA informado já existe no BD para não dar exception
            $stmt = $pdo->prepare("select * from alunosPhp where ra = :ra");
            $stmt->bindParam(':ra', $ra);
            $stmt->execute();

            $rows = $stmt->rowCount();

            if ($rows <= 0) {
                if (($nomeFoto == "") && (move_uploaded_file(
                    $_FILES['foto']['tmp_name'],
                    $uploadDir . $novoNomeFoto
                ))) {
                    $uploadFile = $uploadDir . $novoNomeFoto;
                } else {
                    $uploadFile = null;
                    echo "Sem upload de imagem";
                }

                $stmt = $pdo->prepare("insert into alunosPhp (ra, nome, curso, foto) values(:ra, :nome, :curso, :foto)");
                $stmt->bindParam(':ra', $ra);
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':curso', $curso);
                $stmt->bindParam(':foto', $fotoBinario);
                $stmt->execute();

                echo "<span id='sucess'>Aluno Cadastrado!</span>";
            } else {
                echo "<span id='error'>Ra já existente!</span>";
            }
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    $pdo = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluindo PHP</title>
</head>
<body>
    
</body>
<?php

include("functions.php");
//require("functions.php"); 
//a diferença entre os dois é a maneira que o erro é tratado: REQUIRE prduz um erro E_COMPILE_ERROR, o que 

$media = calcMedia(9.0, 10.0);
echo $media;

echo "<br><br>";

soma(1, 2 , 3);

?>
</body>
</html>
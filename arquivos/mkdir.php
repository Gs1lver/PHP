<?php

mkdir('./teste1', 0777); ////Permissao padrão é 0777, que significa o acesso mais abrangente possível
echo "Pasta teste 1 criada com sucesso!<br>";

mkdir('./teste2/teste3', 0777, true); //recursive=true permite criar uma pasta dentro da outra
echo "Pasta teste 3 criada com sucesso!<br>"

//chmod('./teste1', 0600);
//echo "Permissão da pasta 1 alterada com sucesso!<br>";

?>
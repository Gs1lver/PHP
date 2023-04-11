<?php

$nome = 'Isabela';
$Isabela = "Bla Bla!";
echo 'O meu nome é ' . $$nome . '<br>'; //variavel de variavel

if($nome == 'Isabela')
    echo 'Verdadeiro';
else
    echo 'Falso';


$idade = '17';

if($idade === 17) // três = considera o tipo e o valor da variavel 
    echo 'Verdadeiro';
else    
    echo 'Falso';

//Loops
for($i = 0; $i <=10; $i++ ){
    echo $i;
    echo '<br>';
}

echo 'While <br>';

$i = 0;
while($i < 10){
    echo $i;
    echo '<br>';
    $i++;
}

//Função
printNumero(30);
echo '<br>';
printNumero('Isabela');

function printNumero($n){
    echo $n;
}

//Classes
class Pessoa{
    public $nome;
    public $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function chamaNomeIdade(){
        echo $this->nome;
        echo '<br>';
        echo $this->idade;
        
    }
}

$pessoa = new Pessoa('Isabela','17');

$pessoa->chamaNomeIdade();
?>
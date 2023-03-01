<?php
 $n = 1;
 $tabuada=7;

 while($n<=10){
    echo $n. "x" . $tabuada . "=" . ($n * $tabuada) . "<br>";
    $n++;
 }

 $n=1;
 $tabuada=7;

 do{
    echo $n . "x" . $tabuada . "=" . ($n * $tabuada) . "<br>";
    $n++;
 }while($n<=10);
?>
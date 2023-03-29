<?php
//CRIAÇÃO DE DATA
echo "<b>DateTime()</b>";
    $dataAtual = new DateTime();
    echo "<br>" . $dataAtual->format('d-m-Y H:i:s');

    $dataEspecifica = new DateTime('1990-01-22');
    echo "<br>" . $dataEspecifica->format('d-m-Y H:i:s');

    $texto = new DateTime('+1 month');
    echo "<br>" . $texto->format('d-m-Y H:i:s');

//TIMESTAMP = forma numérica de representar uma marca de tempo, indicando o tempo transcorrido em segundos desde a data especificada
    $agora = time();
    echo "<hr><b>Timestamp</b><br>" . $agora;





?>

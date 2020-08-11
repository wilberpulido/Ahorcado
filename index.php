<?php
require_once('./Ahorcado.php');

    do{
    echo "Elija una palabra!: ";
    $palabraAdivinar=readline();
    $ahorcado = new Ahorcado($palabraAdivinar);

    echo "\n".$ahorcado->mostrar()."\n";

    do{
        $letraAdivinar=readline();
        $ahorcado->jugar($letraAdivinar)."\n";
        echo "\n".$ahorcado->mostrar()."\n";
    }while(!$ahorcado->terminoElJuego());

    if ($ahorcado->ganar()){
        echo 'EEEEECHOO';
    } else echo "Loser";
    echo "\n"."try again?, type y or n: ";
    $option=readline();
}while($option !== "n");

echo "\n Hasta la proxima amiguito!!!";
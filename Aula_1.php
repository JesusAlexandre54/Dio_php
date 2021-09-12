<?php
    $categorias = [];
    $categorias [] = 'infantil';
    $categorias [] = 'adolescente';
    $categorias [] = 'adulto';
    $categorias [] = 'idoso';

    $nome='Eduardo';
    $idade=50;
    if ($idade >= 6 && $idade <= 12){
        echo "$nome se encaixa na categoria infantil";

    }
    else if ($idade >= 13 && $idade <= 18){
        echo "$nome se encaixa na categoria adolescente";


    }
    else
    echo " $nome se encaixa na categoria adulto";






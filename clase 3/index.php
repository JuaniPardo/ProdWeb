<?php

require_once "modelos/ClaseAlgo.php";
require_once "modelos/Gato.php";

ClaseAlgo::metodoEstatico();

$gato1 = new Gato();
$gato2 = new Gato('Chatran');

$gato2->setNombre('Gaturro');

echo $gato2->getNombre();
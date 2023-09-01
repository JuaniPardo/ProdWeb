<?php

class Gato
{
    private $nombre;
    public static $cantidadGatos = 0;

    public function __construct($nombre = 'Garfield')
    {
        $this->nombre = $nombre;
        self::$cantidadGatos++;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}
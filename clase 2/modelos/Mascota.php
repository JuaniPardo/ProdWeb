<?php

abstract class Mascota
{
    protected $nombre;
    protected $vacunasObligatorias = [];

    public function __construct($nombre, $vacunasObligatorias)
    {
        $this->nombre = $nombre;
        $this->vacunasObligatorias = $vacunasObligatorias;
    }
}
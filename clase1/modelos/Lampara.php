<?php

class Lampara
{
    /*private $marca;
    private $color;
    private $encendida = false;*/
    private $data = array(
        'marca' => '',
        'color' => '',
        'encendida' => false
    );

    /**
     * @param $marca
     * @param $color
     * @param bool $encendida
     */
    public function __construct($marca, $color)
    {
        $this->marca = $marca;
        $this->color = $color;
        $this->encendida = false;
    }

    /**
     * @return mixed
     */



    public function encender()
    {
        $this->encendida = true;
    }

    public function apagar()
    {
        $this->encendida = false;
    }
}
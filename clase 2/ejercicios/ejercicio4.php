<?php

class Vendedor
{
    private $identificacion;
    private $nombre;
    private $barrios = [];

    /**
     * @param $identificacion
     * @param $nombre
     * @param array $barrios
     */
    public function __construct($identificacion, $nombre, array $barrios)
    {
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->barrios = $barrios;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getIdentificacion()
    {
        return $this->identificacion;
    }
    public function isTieneBarrio($barrio)
    {
        return in_array($barrio, $this->barrios);
    }


}
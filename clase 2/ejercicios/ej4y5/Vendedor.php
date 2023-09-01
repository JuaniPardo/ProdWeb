<?php

class Vendedor
{
    private int $identificacion;
    private string $nombre;
    private $barrios = [];

    public function __construct(int $identificacion,string $nombre, array $barrios)
    {
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->barrios = $barrios;
    }

    public function getNombre():string
    {
        return $this->nombre;
    }

    public function getIdentificacion():int
    {
        return $this->identificacion;
    }
    public function isTieneBarrio($barrio):bool
    {
        return in_array($barrio, $this->barrios);
    }

    public function __toString(): string
    {
        return "ID: {$this->identificacion} - Nombre: {$this->nombre} - Barrios: " . implode(", ", $this->barrios);
    }



}
<?php
require_once "ejercicio1.php";
class Evento
{
    private $nombre;
    private $is_mayor_edad = false;
    private $invitados = [];

    public function __construct($nombre, $is_mayor_edad)
    {
        $this->nombre = $nombre;
        $this->is_mayor_edad = $is_mayor_edad;
    }

    public function addInvitado($persona)
    {
        if (!$this->is_mayor_edad || $persona->isMayorEdad()) {
            $this->invitados[] = $persona;
            return true;
        }
        return false;
    }
}
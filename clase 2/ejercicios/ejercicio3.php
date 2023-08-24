<?php

class Vehiculo
{
    private $cant_ruedas;
    private $cant_puertas;

    public function __construct($cant_ruedas, $cant_puertas)
    {
        $this->cant_ruedas = $cant_ruedas;
        $this->cant_puertas = $cant_puertas;
    }

}

class Auto extends Vehiculo
{
    public function __construct($cant_puertas)
    {
        parent::__construct(4, $cant_puertas);
    }
}

class Moto extends Vehiculo
{
    public function __construct()
    {
        parent::__construct(2, 0);
    }
}

class Camion extends Vehiculo
{
    public function __construct($cant_ruedas)
    {
        parent::__construct($cant_ruedas, 2);
    }
}
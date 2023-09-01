<?php
require_once "Vendedor.php";
require_once "VendedorBuscador.php";

$vendedores = array(
    new Vendedor(1, "Gonzalo", array("Villa Crespo", "Caballito", "Almagro")),
    new Vendedor(2, "Ezequiel", array("Villa Crespo", "Almagro", "Palermo")),
    new Vendedor(3, "Valeria", array("San Telmo", "Boca", "San Telmo")),
    new Vendedor(4, "Gastón", array("Liniers", "Flores", "Villa Lugano")),
    new Vendedor(5, "Ornella", array("Colegiales", "Chacarita", "Paternal"))
);


echo VendedorBuscador::getByCodigo($vendedores, 3) . "<br>";

var_dump(
    VendedorBuscador::countByBarrio($vendedores, "Villa Crespo")
); //Tiene que devolver 2
var_dump(
    VendedorBuscador::countByBarrio($vendedores, "Liniers")
    ); //Tiene que devolver 1
var_dump(
    VendedorBuscador::countByBarrio($vendedores, "Belgrano")
    ); //Tiene que devolver 0
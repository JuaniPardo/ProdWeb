<?php
require_once "Vendedor.php";

class VendedorBuscador
{
    public static function getByCodigo(
        array $vendedores,
        int   $identificacion
    ): ?Vendedor
    {
        $i = 0;
        $length = count($vendedores);
        $vendedor = null;
        while ($i < $length && is_null($vendedor)) {
            if ($vendedores[$i]->getIdentificacion() == $identificacion) {
                $vendedor = $vendedores[$i];
            }
            $i++;
        }
        return $vendedor;
    }

    public static function countByBarrio(
        array  $vendedores,
        string $barrio
    ): int
    {
        $cantidad = 0;
        foreach ($vendedores as $vend) {
            if ($vend->isTieneBarrio($barrio)) {
                $cantidad++;
            }
        }
        return $cantidad;
    }

}
<?php

class Cart
{
    public static function get(): array
    {
        if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        return $_SESSION['cart'];
    }

    public static function add($code, $quantity)
    {
        $cart = self::get();
        if (isset($cart[$code])) {
            $cart[$code] += $quantity;
        } else {
            $cart[$code] = $quantity;
        }
        $_SESSION['cart'] = $cart;
    }

    public static function getIndexByCode($code): int
    {
        $cart = self::get();
        $index = array_search($code, array_keys($cart));
        if ($index === false) {
            $index = -1;
        }
        return $index;
    }

    public static function remove($code)
    {
        $cart = self::get();
        $index = self::getIndexByCode($code);
        if ($index >= 0) {
            array_splice($cart, $index, 1);
        }
        $_SESSION['cart'] = $cart;
    }

    public static function clear()
    {
        $_SESSION['cart'] = [];
    }

}
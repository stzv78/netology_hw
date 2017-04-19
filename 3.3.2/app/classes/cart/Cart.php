<?php

namespace classes\cart;


class Cart
{
    use \classes\AllProductTrait;

    public function __construct($id, $vol)
    {
        $_SESSION['cartNumber']++;
        $_SESSION['idProduct'][] = $id;
        $dbProduct = \classes\AllProductTrait::dataBaseConnetc();
        $_SESSION['cartPrice'] = $_SESSION['cartPrice'] + ($dbProduct[$id]['price'] * $vol);
    }
}
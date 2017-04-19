<?php

namespace classes\furniture;


class Furniture extends \classes\AllProduct
{
    use \classes\AllProductTrait;

    public function __construct()
    {
        $dbProduct = \classes\AllProductTrait::dataBaseConnetc();
        foreach ($dbProduct as $key => $data) {
            if ($data["class"] === "Мебель") {
                $arrayFurniture[$key] = $data;
            }
        }
        $this->dataProduct = $arrayFurniture;
    }
}
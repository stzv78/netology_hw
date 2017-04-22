<?php

namespace classes\furniture;


class Furniture extends \AllProduct
{
    use \classes\AllProductTrait;

    public function __construct()
    {
        $dbProduct = self::dataBaseConnetc();
        foreach ($dbProduct as $key => $data) {
            if ($data["class"] === "Мебель") {
                $arrayFurniture[$key] = $data;
            }
        }
        $this->dataProduct = $arrayFurniture;
    }
}
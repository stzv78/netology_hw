<?php

namespace classes\clothing;


class Clothing extends \AllProduct
{
    use \classes\AllProductTrait;

    public function __construct()
    {
        $dbProduct = self::dataBaseConnetc();
        foreach ($dbProduct as $key => $data) {
            if ($data["class"] === "Одежда") {
                $arrayFurniture[$key] = $data;
            }
        }
        $this->dataProduct = $arrayFurniture;
    }
}
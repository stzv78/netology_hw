<?php

namespace classes\telephones;


class Telephones extends \AllProduct
{
    use \classes\AllProductTrait;

    public function __construct()
    {
        $dbProduct = self::dataBaseConnetc();
        foreach ($dbProduct as $key => $data) {
            if ($data["class"] === "Телефон") {
                $arrayTelephones[$key] = $data;
            }
        }
        $this->dataProduct = $arrayTelephones;
    }
}
<?php

namespace classes\telephones;


class Telephones extends \classes\AllProduct
{
    use \classes\AllProductTrait;

    public function __construct()
    {
        $dbProduct = \classes\AllProductTrait::dataBaseConnetc();
        foreach ($dbProduct as $key => $data) {
            if ($data["class"] === "Телефон") {
                $arrayTelephones[$key] = $data;
            }
        }
        $this->dataProduct = $arrayTelephones;
    }
}
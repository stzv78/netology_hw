<?php

namespace classes\appliances;


class Appliances extends \AllProduct
{
    use \classes\AllProductTrait;

    public function __construct()
    {
        $dbProduct = self::dataBaseConnetc();
        foreach ($dbProduct as $key => $data) {
            if ($data["class"] === "Бытовая техника") {
                $arrayAppliances[$key] = $data;
            }
        }
        $this->dataProduct = $arrayAppliances;
    }
}
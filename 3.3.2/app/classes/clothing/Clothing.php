<?php

namespace classes\clothing;


class Clothing extends \classes\AllProduct
{
    use \classes\AllProductTrait;

    public function __construct()
    {
        $dbProduct = \classes\AllProductTrait::dataBaseConnetc();
        foreach ($dbProduct as $key=>$data){
            if ($data["class"]==="Одежда"){
                $arrayFurniture[$key] = $data;
            }
        }
        $this->dataProduct = $arrayFurniture;
    }
}
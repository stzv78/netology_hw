<?php

namespace classes\appliances;


class Appliances extends \classes\AllProduct
{
    use \classes\AllProductTrait;

    public function __construct()
    {
        $dbProduct = \classes\AllProductTrait::dataBaseConnetc();
        foreach ($dbProduct as $key=>$data){
            if ($data["class"]==="Бытовая техника"){
                $arrayAppliances[$key] = $data;
            }
        }
        $this->dataProduct = $arrayAppliances;
    }
}
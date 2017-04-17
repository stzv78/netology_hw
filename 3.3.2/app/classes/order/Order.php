<?php

namespace classes\order;


class Order
{
    use \classes\AllProductTrait;

    public function __construct($arraySession)
    {
        $this->dataProduct = $arraySession;
    }

    public function printOrder()
    {
        $producValueId = array_count_values($this->dataProduct['idProduct']);
        $dbProduct = \classes\AllProductTrait::dataBaseConnetc();
        #var_dump($this->dataProduct);
        foreach ($producValueId as $key=>$data) {
            echo '<div><p>Товар: '.$dbProduct[$key]['brand'].'</p>';
            echo '<p>Цена: '.($dbProduct[$key]['price']*$data).'</p>';
            echo '<p>Количестов: '.$data.' шт.</p>';
            echo '<p><a href="order.php?delId='.$key.'">Удалить из корзины</a></p></div>';
        }
    }

    public function deleteProduct($id)
    {
        $producValueId = array_count_values($this->dataProduct['idProduct']);
        $dbProduct = \classes\AllProductTrait::dataBaseConnetc();
        $this->dataProduct["cartPrice"] = $this->dataProduct["cartPrice"] - $dbProduct[$id]['price'];
        $this->dataProduct["cartNumber"] = $this->dataProduct["cartNumber"] - 1;
        unset($this->dataProduct['idProduct'][array_search($id, $this->dataProduct['idProduct'])]);

    }
}
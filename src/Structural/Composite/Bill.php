<?php


namespace App\Structural\Composite;


class Bill implements DTOModel
{
    private  $orders = [];

    public function addOrder(DTOModel $order)
    {
       $this->orders[] = $order;
    }
    public function render()
    {
       return [
           'orders' => array_map(fn (DTOModel $order) => $order->render(),$this->orders)
       ];
    }
    public function __toString(): string
    {
        return  json_encode($this->render(),JSON_PRETTY_PRINT);
    }
}
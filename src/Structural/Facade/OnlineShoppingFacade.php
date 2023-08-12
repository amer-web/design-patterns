<?php


namespace App\Structural\Facade;


class OnlineShoppingFacade
{
    private InventorySystem $inventory;
    private PaymentSystem $payment;
    private OrderProcessingSystem $orderProcessing;

    public function __construct()
    {
        $this->inventory = new InventorySystem();
        $this->payment = new PaymentSystem();
        $this->orderProcessing = new OrderProcessingSystem();
    }

    public function buyProduct($product, $amount) {

        if ($this->inventory->checkAvailability($product)) {
            $this->payment->processPayment($amount);
            $this->orderProcessing->placeOrder($product, $amount);
            return true;
        } else {
            return false;
        }
    }


}
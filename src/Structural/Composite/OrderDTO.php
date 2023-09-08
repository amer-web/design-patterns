<?php


namespace App\Structural\Composite;


class OrderDTO implements DTOModel
{
    private DTOModel $orderOwnerDTO;
    private float $price;
    private int $quantity;

    /**
     * OrderDTO constructor.
     * @param OrderOwnerDTO $orderOwnerDTO
     * @param float $price
     * @param int $quantity
     */
    public function __construct(OrderOwnerDTO $orderOwnerDTO, float $price, int $quantity)
    {
        $this->orderOwnerDTO = $orderOwnerDTO;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function render()
    {
        return [
            'order_owner' => $this->orderOwnerDTO->render(),
            'price' => $this->price,
            'quantity' => $this->quantity,
        ];
    }

}
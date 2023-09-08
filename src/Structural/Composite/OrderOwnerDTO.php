<?php


namespace App\Structural\Composite;


class OrderOwnerDTO implements DTOModel
{
    private DTOModel $address;
    private string $name;

    /**
     * OrderOwnerDTO constructor.
     * @param AddressDTO $address
     * @param string $name
     */
    public function __construct(AddressDTO $address, string $name)
    {
        $this->address = $address;
        $this->name = $name;
    }


    public function render()
    {
        return [
            'address' => $this->address->render(),
            'name' => $this->name
        ];
    }
}
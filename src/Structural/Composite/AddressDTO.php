<?php


namespace App\Structural\Composite;


class AddressDTO implements DTOModel
{
    private string $address;
    private int $houseNum;

    /**
     * AddressDTO constructor.
     * @param string $address
     * @param int $houseNum
     */
    public function __construct(string $address, int $houseNum)
    {
        $this->address = $address;
        $this->houseNum = $houseNum;
    }

    public function render()
    {
        return [
            'address' => $this->address,
            'houseNum' => $this->houseNum,
        ];
    }
}
<?php


namespace App\Behavioral\Observer;


use SplSubject;

class Kitchen implements \SplObserver
{
    private $info_order;

    /**
     * @var  Restaurant $subject
     */
    public function update(SplSubject $subject)
    {
        $this->info_order = $subject->getInfoOrder();
    }
    /**
     * @return mixed
     */
    public function getInfoOrder()
    {
        return $this->info_order;
    }

}
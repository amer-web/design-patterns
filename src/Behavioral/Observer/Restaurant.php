<?php


namespace App\Behavioral\Observer;


use SplObserver;

class Restaurant implements \SplSubject
{
    private $observers;
    private $info_order;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        /* @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setInfoOrder($oder_num, array|string $items)
    {
        $items = is_array($items) ? implode(' ,', $items) : $items;
        $this->info_order = 'we have a new order that is number ' . $oder_num . ' and items ' . $items;
        $this->notify();
    }

    public function getInfoOrder()
    {
        return $this->info_order;
    }


}
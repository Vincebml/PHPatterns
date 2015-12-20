<?php

namespace Phpatterns\Behavioral\Observer\WithoutSPL;

/**
 * A Subject as defined in the Observer design pattern
 */
class Product implements SubjectInterface
{
    /** @var int */
    private $price;

    /** @var array */
    private $observers;

    public function __construct()
    {
        $this->price = 10;
        $this->observers = [];
    }

    /**
     * Attach an SplObserver
     * @param ObserverInterface $observer The observer to attach.
     */
    public function attach(ObserverInterface $observer)
    {
        if (! in_array($observer, $this->observers, true)) {
            $this->observers[] = $observer;
        }
    }

    /**
     * Detach an observer
     * @param ObserverInterface $observer The observer to detach.
     */
    public function detach(ObserverInterface $observer)
    {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    /**
     * Notify an observer
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Set the price for the product and notify observers
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;

        // notify the observers about the change
        $this->notify();
    }

    /**
     * Get the price for the product
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get observers
     * @return array
     */
    public function &getObservers()
    {
        return $this->observers;
    }
}

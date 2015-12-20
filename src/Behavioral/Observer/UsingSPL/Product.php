<?php

namespace Phpatterns\Behavioral\Observer\UsingSPL;

/**
 * A Subject as defined in the Observer design pattern
 */
class Product implements \SplSubject
{
    /** @var int */
    private $price;

    /**
     * Observers attached to the Product
     *
     * @var \SplObjectStorage
     */
    private $observers;

    public function __construct()
    {
        $this->price = 10;
        $this->observers = new \SplObjectStorage();
    }

    /**
     * Attach an SplObserver
     * @link http://php.net/manual/en/splsubject.attach.php
     * @param \SplObserver $observer The SplObserver to attach.
     */
    public function attach(\SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * Detach an observer
     * @link http://php.net/manual/en/splsubject.detach.php
     * @param \SplObserver $observer The SplObserver to detach.
     */
    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * Notify an observer
     * @link http://php.net/manual/en/splsubject.notify.php
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
     * @return \SplObjectStorage
     */
    public function getObservers()
    {
        return $this->observers;
    }
}

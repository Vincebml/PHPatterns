<?php

namespace Phpatterns\Behavioral\Iterator;

class BottleCrate
{
    /** @var Bottle[] */
    private $bottles;

    public function __construct()
    {
        $this->bottles = [];
    }
    public function getCount()
    {
        return count($this->bottles);
    }

    /**
     * @param int $bottleNumber
     * @return null|Bottle
     */
    public function getBottle($bottleNumber)
    {
        if ($bottleNumber < $this->getCount()) {
            return $this->bottles[$bottleNumber];
        }

        return null;
    }

    /**
     * @param Bottle $bottle
     */
    public function addBottle(Bottle $bottle)
    {
        if (!in_array($bottle, $this->bottles, true)) {
            $this->bottles[] = $bottle;
        }
    }

    /**
     * @param Bottle $bottle
     */
    public function removeBottle(Bottle $bottle)
    {
        $key = array_search($bottle, $this->bottles, true);
        if ($key !== false) {
            unset($this->bottles[$key]);
        }
    }
}

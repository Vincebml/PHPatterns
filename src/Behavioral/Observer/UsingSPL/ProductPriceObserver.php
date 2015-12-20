<?php

namespace Phpatterns\Behavioral\Observer\UsingSPL;

/**
 * An Observer as defined in the Observer design pattern
 */
class ProductPriceObserver implements \SplObserver
{
    /**
     * Receive update from subject (our Product object)
     * @link http://php.net/manual/en/splobserver.update.php
     * @param \SplSubject $subject The SplSubject notifying the observer of an update.
     */
    public function update(\SplSubject $subject)
    {
        echo sprintf(
            'Product has a new price: %d€.',
            $subject->getPrice()
        );
    }
}

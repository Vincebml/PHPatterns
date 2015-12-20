<?php

namespace Phpatterns\Behavioral\Observer\WithoutSPL;

class ProductPriceObserver implements ObserverInterface
{
    /**
     * Receive update from subject
     * @param SubjectInterface $subject The subject notifying the observer of an update.
     */
    public function update(SubjectInterface $subject)
    {
        echo sprintf(
            'Product has a new price: %d€.',
            $subject->getPrice()
        );
    }
}

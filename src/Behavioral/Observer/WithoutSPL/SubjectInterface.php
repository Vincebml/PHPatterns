<?php

namespace Phpatterns\Behavioral\Observer\WithoutSPL;

/**
 * Interface SubjectInterface used to implement the Observer design pattern.
 * (have to be used with ObserverInterface)
 */
interface SubjectInterface
{
    /**
     * Attach an ObserverInterface
     * @param ObserverInterface $observer The observer to attach.
     */
    public function attach(ObserverInterface $observer);

    /**
     * Detach an observer
     * @param ObserverInterface $observer The observer to detach.
     */
    public function detach(ObserverInterface $observer);

    /**
     * Notify an observer
     */
    public function notify();
}

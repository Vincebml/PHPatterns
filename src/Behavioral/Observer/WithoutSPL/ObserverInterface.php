<?php

namespace Phpatterns\Behavioral\Observer\WithoutSPL;

/**
 * Interface ObserverInterface used to implement the Observer design pattern.
 * (have to be used with SubjectInterface)
 */
interface ObserverInterface
{
    /**
     * Receive update from subject
     * @param SubjectInterface $subject The subject notifying the observer of an update.
     */
    public function update(SubjectInterface $subject);
}

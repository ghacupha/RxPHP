<?php

namespace CustomOperatorTest\SubNamespace\Rx\Operator;

use Rx\ObservableInterface;
use Rx\ObserverInterface;
use Rx\Operator\OperatorInterface;
use Rx\SchedulerInterface;

class TestOperator implements OperatorInterface
{
    private $mapTo;

    public function __construct($mapTo)
    {
        $this->mapTo = $mapTo;
    }

    /**
     * @inheritDoc
     */
    public function __invoke(
        ObservableInterface $observable,
        ObserverInterface $observer,
        SchedulerInterface $scheduler = null
    ) {
        return $observable
            ->mapTo($this->mapTo)
            ->subscribe($observer, $scheduler);
    }
}

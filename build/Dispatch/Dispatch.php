<?php

namespace Build\Dispatch;

use Build\Consignment\Consignment;
use Build\Couriers\Courier;
use Build\Exceptions\DispatchException;

class Dispatch
{
    /**
     * @var Courier
     */
    protected Courier $courier;

    /**
     * @var int
     */
    protected int $amount;

    /**
     * @var array
     */
    private array $consignments;

    /**
     * Dispatch constructor.
     * @param Courier $courier
     * @param int $amount
     */
    public function __construct(Courier $courier, int $amount)
    {
        $this->courier = $courier;
        $this->amount = $amount;
        $this->consignments = [];

        try{
            $this->checkAmount();
        }catch(DispatchException $e)
        {
            echo $e->getMessage();
        }

        $this->startBatch();
    }

    /**
     * @throws DispatchException
     */
    private function checkAmount()
    {
        if($this->amount <= 0)
        {
            throw new DispatchException('Amount must be greater that 0');
        }
    }

    /**
     * Start batch and loop through each consignment
     * End Batch when no more consignments
     */
    public function startBatch()
    {
        while($this->periodActive())
        {
            $this->addConsignment();

            $this->amount--;
        }

        $this->endBatch();
    }

    /**
     * Check whether there are anymore consignments
     * @return bool
     */
    private function periodActive(): bool
    {
        return $this->amount > 0;
    }

    /**
     * Set consignment number and push it to consignments array
     */
    public function addConsignment()
    {
        $consignment = new Consignment();
        $consignment_number = $this->courier->generateConsignmentNumber($consignment->getId());
        $consignment->setConsignmentNumber($consignment_number);

        array_push($this->consignments, $consignment->getConsignmentNumber());
    }

    /**
     * End batch and send consignments to courier using selected
     * method of contact
     */
    public function endBatch()
    {
        $this->courier->sendConsignmentNumbers($this->courier->getContactDetails(), $this->consignments);
    }
}
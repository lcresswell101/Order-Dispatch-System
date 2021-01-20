<?php

namespace Build\Consignment;

class Consignment
{
    /**
     * @var float
     */
    protected float $consignment_number;

    /**
     * Method that would pull consignment ID from DB
     * @return int
     */
    public function getId(): int
    {
        // TODO: Implement getId() method.
        return round(mt_rand(0, 100), 2);
    }

    /**
     * @param float $consignment_number
     */
    public function setConsignmentNumber(float $consignment_number)
    {
        $this->consignment_number = $consignment_number;
    }

    /**
     * @return float
     */
    public function getConsignmentNumber(): float
    {
        return $this->consignment_number;
    }
}
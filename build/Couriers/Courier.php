<?php

namespace Build\Couriers;

interface Courier
{
    /**
     * @param float $number
     * @return float
     */
    public function generateConsignmentNumber(float $number): float;

    /**
     * @param array $contact_details
     * @param array $consignments
     * @return mixed
     */
    public function sendConsignmentNumbers(array $contact_details, array $consignments);

    /**
     * @return array
     */
    public function getContactDetails(): array;
}
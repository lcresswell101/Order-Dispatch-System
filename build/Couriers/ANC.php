<?php


namespace Build\Couriers;


class ANC implements Courier
{

    /**
     * @inheritDoc
     */
    public function generateConsignmentNumber(float $number): float
    {
        // TODO: Implement generateConsignmentNumber() method.
    }

    /**
     * @inheritDoc
     */
    public function sendConsignmentNumbers(array $contact_details, array $consignments)
    {
        // TODO: Implement sendConsignmentNumbers() method.
    }

    /**
     * @inheritDoc
     */
    public function getContactDetails(): array
    {
        // TODO: Implement getContactDetails() method.
    }
}
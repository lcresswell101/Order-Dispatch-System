<?php

namespace Build\Couriers;

class RoyalMail implements Courier
{
    /**
     * Method that would use courier supplied algorithm to generate unique
     * consignment number
     * @param float $number
     * @return float
     */
    public function generateConsignmentNumber(float $number): float
    {
        // TODO: Implement generateConsignmentNumber() method.
        return $number;
    }

    /**
     * Method would return courier contact details, whether it be an email or ftp
     * @return array
     */
    public function getContactDetails(): array
    {
        // TODO: Implement getContactDetails() method.
        return [];
    }

    /**
     * Method to send consignment method to courier using preferred method
     * @param array $contact_details
     * @param array $consignments
     */
    public function sendConsignmentNumbers(array $contact_details, array $consignments)
    {
        // TODO: Implement sendConsignmentNumbers() method.
    }
}
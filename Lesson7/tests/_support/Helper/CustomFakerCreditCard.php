<?php
namespace Helper;

use Faker\Provider\Base;

class CustomFakerCreditCard extends Base
{
    /**
     * Method returns random credit card number
     */
    public function getCreditCardNumber()
        {
            return sprintf(
                '%d%d%d%d',
                random_int(4000, 4003),
                random_int(0000, 9999),
                random_int(0000, 9999),
                random_int(0000, 9999)
            );
        }

        /**
     * Method returns random Security code of credit card
     */
    public function getSecurityCode()
    {
        return sprintf(
            '%d',
            random_int(000, 999)
        );
    }
}
<?php
namespace Helper;

use Faker\Provider\Base;

class CustomFaker extends Base
{
    /**
     * Method returns random credit card number
     */
    public function owner()
        {
            return sprintf(
                'YerassylNurzhan%d',
                random_int(0, 9999)
            );
        }
}
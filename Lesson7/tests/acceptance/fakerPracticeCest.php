<?php

namespace Tests\Acceptance;

use Faker\Factory;
use Helper\CustomFakerCreditCard;
use Page\Acceptance\Fill;

/**
 * Class for testing Form
 */
class fakerPracticeCest
{
    /**
     * Form testing via Faker
     * @group faker
     */
    public function checkFormFillmentViaFaker(\AcceptanceTester $I)
    {
        $faker = Factory::create('kk_KZ');
        $faker->addProvider(new CustomFakerCreditCard($faker));

        $FirstName = $faker->firstName;
        $LastName = $faker->lastName;
        $Email = $faker->email;
        $PhoneNumber = $faker->phoneNumber;
        $Address = $faker->address;
        $Address2 = $faker->address;
        $City = $faker->city;
        $State = $faker->region;
        $Postal = $faker->postcode;
        $StreetAddress = $faker->streetAddress;
        $StreetAddress2 = $faker->streetAddress;
        $CardNumber = $faker->getCreditCardNumber();
        $SecurityCode = $faker->getSecurityCode();

        $I->amOnUrl('https://prostochizh.github.io/form/');
        $I->waitForElementClickable(Fill::$FirstName);
        $I->fillField(Fill::$FirstName, $FirstName);
        $I->fillField(Fill::$LastName, $LastName);
        $I->fillField(Fill::$Email, $Email);
        $I->fillField(Fill::$PhoneNumber, $PhoneNumber);
        $I->fillField(Fill::$Address, $Address);
        $I->fillField(Fill::$Address2, $Address2);
        $I->fillField(Fill::$City, $City);
        $I->fillField(Fill::$State, $State);
        $I->fillField(Fill::$Postal, $Postal);
        $I->click(Fill::$CardRadioButton);
        $I->wait(2);
        $I->click(Fill::$FirstNameCard);
        $I->fillField(Fill::$FirstNameCard, $FirstName);
        $I->fillField(Fill::$LastNameCard, $LastName);
        $I->fillField(Fill::$CardNumber, $CardNumber);
        $I->fillField(Fill::$SecurityCode, $SecurityCode);
        $I->click(Fill::$MonthCard);
        $I->click(Fill::$Month);
        $I->click(Fill::$YearCard);
        $I->click(Fill::$Year);
        $I->fillField(Fill::$StreetAddress, $StreetAddress);
        $I->fillField(Fill::$StreetAddress2, $StreetAddress2);
        $I->fillField(Fill::$CardCity, $City);
        $I->fillField(Fill::$CardState, $State);
        $I->fillField(Fill::$CardPostal, $Postal);
        $I->click(Fill::$Country);
        $I->click(Fill::$Kazakhstan);
        $I->click(Fill::$RegisterButton);
        $I->waitForText('Good job');

    }
}

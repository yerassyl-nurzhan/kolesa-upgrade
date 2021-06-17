<?php
namespace Helper;

use Faker\Factory;

use SebastianBergmann\CodeCoverage\Report\Html\Facade;

class BaseHelper extends \Codeception\Module
{
    public function getFaker($locale = 'ru_RU')
    {
        $faker = Factory::create($locale);
        $faker->addProvider(new CustomFaker($faker));

        return $faker;
    }
}

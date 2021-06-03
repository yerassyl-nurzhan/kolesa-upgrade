<?php

use Codeception\Example;
use Page\Acceptance\Habr;

/**
 * Class for testing header of habr.com/ru 
 * @group habr
 */
class habrCest
{

    /**
     * Testing header of habr.com/ru 
     * @param Example $data
     * @dataprovider getDataForCheckingHeader
     */
    public function checkHeader(AcceptanceTester $I, Example $data)
    {
        $I->amOnPage('');
        $I->waitForElementClickable(sprintf(Habr::$buttonInHeader, $data['buttonInHeader']));
        $I->click(sprintf(Habr::$buttonInHeader, $data['buttonInHeader']));
        $I->waitForText($data['title'], 10, '.page-header');
        $I->seeInCurrentUrl($data['url']);   
    }

    protected function getDataForCheckingHeader()
    {
        return [
            ['buttonInHeader' => '2', 'url' => 'develop', 'title' => 'Разработка'],
            ['buttonInHeader' => '3', 'url' => 'admin', 'title' => 'Администрирование'],
            ['buttonInHeader' => '4', 'url' => 'design', 'title' => 'Дизайн'],
            ['buttonInHeader' => '5', 'url' => 'management', 'title' => 'Менеджмент'],
            ['buttonInHeader' => '6', 'url' => 'marketing', 'title' => 'Маркетинг'],
            ['buttonInHeader' => '7', 'url' => 'popsci', 'title' => 'Научпоп']
        ];

    }
}

<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage();
        $I->waitForElementVisible(#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a);
        $I->click(#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span);
        $I->waitForElementVisible(#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1);
    }
}

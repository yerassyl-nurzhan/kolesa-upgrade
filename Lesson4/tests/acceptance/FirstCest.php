<?php

class FirstCest
{
    /* Проверить кнопку Quick View в товаре Blouse
    */ 
    public function checkBlouseQuickView(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->waitForElementVisible('#header_logo > a > img');
        $I->scrollTo('#center_column > ul > li:nth-child(2)');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span');
        $I->waitForElementVisible('#index > div.fancybox-overlay.fancybox-overlay-fixed > div');
        $I->seeElement('#product > div > div > div.pb-center-column.col-xs-12.col-sm-4 > h1');
    }
}

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
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
        $I->waitForElementVisible('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span');
        $I->waitForElementVisible('.fancybox-wrap');
        $I->waitForText('Blouse');
    }
}

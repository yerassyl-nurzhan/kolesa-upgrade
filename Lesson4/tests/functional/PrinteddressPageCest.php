<?php

class PrinteddressPageCest
{
    /* Проверить кнопку Quick View в товаре Blouse
    */ 
    public function checkBlouseQuickView(FunctionalTester $I)
    {
        $searchQueryTopXPath = '//input[@id='search_query_top']';
        $searchBoxXPath = '//form[@id='searchbox']/button';

        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('.ajax_block_product', 5);
    }
}

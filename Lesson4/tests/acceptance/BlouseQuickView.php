<?php

class BlouseQuickView
{
    /* Проверить кнопку Quick View в товаре Blouse
    */ 
    public function checkBlouseQuickView(AcceptanceTester $I)
    {
        $headerLogoCss = '#header_logo img';
        $headerLogoXPath = '//div[@id='header_logo']//img';
        $scrollToCss = '#home-page-tabs li:nth-child(2)';
        $scrollToXPath = '//ul[@id='home-page-tabs']//li[2]';
        $moveMouseOverCss = '#homefeatured > li:nth-child(2) img';
        $moveMouseOverXPath = '//ul[@id='homefeatured']//li[2]//img';
        $quickViewButtonCss = '#homefeatured > li:nth-child(2) a.quick-view > span';
        $quickViewButtonXPath = '//ul[@id='homefeatured']//li[2]//a[@class='quick-view']/span';
        $modalWindowCss = '.fancybox-iframe';
        $modalWindowXPath = '//iframe[@class='fancybox-iframe']';
        $blouseCss = '.fancybox-iframe div.pb-center-column > h1';
        $blouseXPath = '//iframe[@class='fancybox-iframe']//div[@class='pb-center-column']/h1';
        
        $I->amOnPage('');
        $I->waitForElementVisible('#header_logo > a > img');
        $I->scrollTo('#center_column > ul > li:nth-child(2)'); 
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.product_img_link > img');
        $I->waitForElementVisible('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span');
        $I->waitForElementVisible('.fancybox-iframe');
        $I->waitForElementVisible('.fancybox-iframe div.pb-center-column > h1');
    }
}

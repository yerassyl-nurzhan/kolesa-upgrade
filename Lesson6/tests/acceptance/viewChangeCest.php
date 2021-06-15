<?php

use Page\Acceptance\searchPage;
use Page\Acceptance\pageView;

class viewChangeCest
{
   
    // Check change of View of the page via clicking on the List button
    public function checkListButton(AcceptanceTester $I)
    {
        $I->amOnUrl(searchPage::$URL);
        $I->click(pageView::$dressesButton);
        $I->waitForElement(pageView::$summerDressesButton);
        $I->click(pageView::$summerDressesButton);
        $I->waitForElement(searchPage::$activeGridButton);
        $I->waitForElement(searchPage::$gridView);
        $I->click(searchPage::$listButton);
        $I->waitForElement(searchPage::$listView);
    }
}

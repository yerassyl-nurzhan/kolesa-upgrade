<?php

use Page\Acceptance\pageView;

class viewChangeCest
{
   
    // Check change of View of the page via clicking on the List button
    public function checkListButton(AcceptanceTester $I)
    {
        $I->amOnUrl(pageView::$URL);
        $I->click(pageView::$dressesButton);
        $I->waitForElement(pageView::$summerDressesButton);
        $I->click(pageView::$summerDressesButton);
        $I->waitForElement(pageView::$activeGridButton);
        $I->waitForElement(pageView::$gridView);
        $I->click(pageView::$listButton);
        $I->waitForElement(pageView::$listView);
    }
}

<?php

use Page\Functional\pageView;

class viewChangeCest
{
   
    // Check change of View of the page via clicking on the List button
    public function checkListButton(FunctionalTester $I)
    {
     $I->amOnPage(pageView::$URL);
     $I->click(pageView::$dressesButton);
     $I->seeElement(pageView::$summerDressesButton);
     $I->click(pageView::$summerDressesButton);
     $I->seeElement(pageView::$activeGridButton);
     $I->seeElement(pageView::$gridView);
     $I->click(pageView::$listButton);
     $I->seeElement(pageView::$listView);
    }
}

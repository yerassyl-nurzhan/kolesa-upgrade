<?php
namespace Page\Acceptance;

class pageView
{
    /**
     * url of current page
     */
    public static $URL = 'http://automationpractice.com/index.php';

    //selector of the DRESSES button
    public static $dressesButton = '#block_top_menu > ul > li:nth-child(2) > a';
    //selector of the SUMMER DRESSES button
    public static $summerDressesButton = '#subcategories > ul > li:nth-child(3) > div.subcategory-image';
    //selector of the active Grid button
    public static $activeGridButton = '.selected#grid';
    //selector of the List button
    public static $listButton = '#list';
    //selector of the grid view after clicking on the Grid button
    public static $gridView = '.grid';
    //selector of the list view after clicking on the List button
     public static $listView = '.list';
    

    /**
     * Testers object
     * 
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Сonstructor method
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->AcceptanceTester = $I;
    }

    /**
     * Closes the error message via clicking on X button  
     */
    /**public function closeErrorMessage()
    {
        $this->acceptanceTester->click(self::$errorButton);
    }
    */
}

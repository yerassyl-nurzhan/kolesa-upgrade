<?php
namespace Page\Acceptance;

class searchPage
{
    /**
     * url of current page
     */
    public static $URL = 'http://automationpractice.com/index.php';

    
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

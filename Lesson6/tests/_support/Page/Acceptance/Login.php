<?php
namespace Page\Acceptance;

class Login
{
    /**
     * url of current page
     */
    public static $URL = '';

    //selector of the Username field
    public static $usernameField = '#user-name';
    //selector of the Password field
    public static $passwordField = '#password';
    //selector of the LOGIN button
    public static $loginButton = '#login-button';
    //selector of the error message
    public static $errorMessage = '.error-message-container';
    //selector of the X button of error message
    public static $errorButton = '.error-button';
    

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
        $this->acceptanceTester = $I;
    }

    /**
     * Closes the error message via clicking on X button  
     */
    public function closeErrorMessage()
    {
        $this->acceptanceTester->click(self::$errorButton);
    }

}

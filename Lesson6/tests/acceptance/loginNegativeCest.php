<?php

use Page\Acceptance\Login;

class loginNegativeCest
{

    // Check negative case of login into the system
    public function checkLoginWithInvalidParameters(AcceptanceTester $I)
    {
        $login = new Login($I);
        
        $I->amOnPage(Login::$URL);
        $I->fillField(Login::$usernameField, 'locked_out_user');
        $I->fillField(Login::$passwordField, 'secret_sauce');
        $I->click(Login::$loginButton);
        $I->seeElement(Login::$errorMessage);
        $login->closeErrorMessage();
        $I->dontSee(Login::$errorMessage);
    }
}

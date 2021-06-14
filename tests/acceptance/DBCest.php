<?php

use PhpParser\Node\Expr\FuncCall;

/**
 * Класс для работы с БД
 */
class DBCest
{
    /**
     * Массив с данными для создания учеток
     */
    public function _before(\AcceptanceTester $I)
    {
        $userData = [ 
            "canBeKilledBySnap" => $I->getFaker() -> boolean(),
            "job" => $I->getFaker() -> company,
            "superhero" => $I->getFaker() -> boolean(),
            "skill" => $I->getFaker() -> word,
            "email" => $I->getFaker() -> email,
            "name" => $I->getFaker() -> name,
            "DOB" => $I->getFaker() -> date("Y-m-d"),
            "avatar" => $I->getFaker() -> imageUrl(),
            "created_at" => $I->getFaker() -> date("Y-m-d"),
            "owner" => "YerassylNurzhan"
        ]; 
        return $userData; 
    }
    /**
     * Тест на проверку создания и удаления через кнопку snap учеток
     * @group lesson10
     */
    public function checkCreatingAndKillingBySnapUsers(\AcceptanceTester $I)
    { 
        for ($i=0; $i < 10 ; $i++) 
        { 
            $userData = $this->_before($I);
            $I->haveInCollection('people', $userData);
            $I->seeInCollection('people', $userData);
        }

        $I->amOnPage('?owner=YerassylNurzhan');
        //Проверка, что создались учетки
        $I->waitForElementVisible('.user-card');
        $usersWithSnapTrue = $I->grabFromCollection('people', array('owner' => 'YerassylNurzhan', 'canBeKilledBySnap' => true));
        $usersWithSnapFalse = $I->grabFromCollection('people', array('owner' => 'YerassylNurzhan', 'canBeKilledBySnap' => false));
        $I->click('#snap');
        //оставил wait, потому что учетки не успевали удаляться
        $I->wait(3);
        //проверки, что ожидаемые учетки удалились, остальные остались в UI 
        $I->dontSeeElement('.avatar', ['src' => $usersWithSnapTrue['avatar']]);
        $I->SeeElement('.avatar', ['src' => $usersWithSnapFalse['avatar']]);
        //проверки, что ожидаемые учетки удалились, остальные остались в DB
        $I->dontSeeInCollection('people', array('owner' => 'YerassylNurzhan', 'canBeKilledBySnap' => true));
        $I->seeInCollection('people', array('owner' => 'YerassylNurzhan', 'canBeKilledBySnap' => false));
    }
}
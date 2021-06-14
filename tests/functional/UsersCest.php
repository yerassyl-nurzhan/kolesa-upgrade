<?php

use Codeception\Example;

/**
 * Класс для работы с юзером
 */
class UsersCest
{
    public static $defaultSchema = [
        '_id'       => 'string',
        'email'     => 'string',
        'name'      => 'string',
        'owner'     => 'string',
        'superhero' => 'boolean'
    ];

    /**
     * Тест на создание, обновление и удаление юзера
     * @group test1
     */
    public function checkUserCreateUpdateAndDeleteUser(\FunctionalTester $I)
    {

        $userData = [
            'email' => $I ->getFaker() ->email,
            'owner' => $I ->getFaker() ->owner,
            'job'   => $I ->getFaker() ->company,
            'name'  => $I ->getFaker() ->name
        ];

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', $userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);
        $I->sendGet('people', $userData);

        $userId = $I->grabDataFromResponseByJsonPath('$[0]_id');

        $I->sendPut("human?_id={$userId[0]}", array('name' => 'SUCCESS'));
        $I->seeResponseContainsJson(['nModified' => '1']);
        $I->sendGet("people?owner={$userData['owner']}");
        $I->seeResponseContainsJson(['name' => 'SUCCESS']);
        $I->sendDelete("human?_id={$userId[0]}");
        $I->seeResponseContainsJson(['deletedCount' => '1']);
        $I->sendGet("people?owner={$userData['owner']}");
        $I->dontSeeResponseContainsJson($userData);
    }

    /** 
     * Проверяем негативные сценарии создания пользователя
     * @group test2
     * @dataProvider getDataForCreateUserNegative
     * @param Example $data
     */

    public function checkUserCreateNegative(\FunctionalTester $I, Example $data)
    {
        $email = $I->getFaker()->email;
        $owner = $I->getFaker()->owner;

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', 
        [
            $data['email'] ? $email : null,
            $data['owner'] ? $owner : null,
        ]);
        $I->seeResponseContainsJson(['status' => false]);
    }

    /**
     * Data Provider для негативного теста
     */
    protected function getDataForCreateUserNegative()
    {
        return [
            [
                'email' => true,
                'owner' => false
            ],
            [
                'email' => false,
                'owner' => true
            ]
        ];
    }
}

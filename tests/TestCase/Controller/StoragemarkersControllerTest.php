<?php
namespace App\Test\TestCase\Controller;

use App\Controller\StoragemarkersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\StoragemarkersController Test Case
 */
class StoragemarkersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [

        'app.storagemarkers', 'app.users'
    ];

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {

        // Set session data
        $this->session([
        'Auth' => [
            'User' => [
                'id'=> 1,
            ]
        ]
        ]);

        //$this->get('/markers');
        $this->get('/users'); //get the list of users
        $this->assertSession(1, 'Auth.User.id'); //check if the user is logged in

        $this->get('/storagemarkers/view');

        $this->assertResponseOk();
             

    }

}

<?php
namespace App\Test\TestCase\Controller;

use App\Controller\MarkersController;
use Cake\TestSuite\IntegrationTestCase;
use App\Controller\UsersController;
use Cake\ORM\TableRegistry;

/**
 * App\Controller\MarkersController Test Case
 */
class MarkersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.markers',
        'app.users'
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

        $this->get('/markers/view');

        $this->assertResponseOk();
             

    }


}

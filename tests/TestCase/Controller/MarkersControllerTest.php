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

        'app.markers'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

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
       // $result = $this->get('/markers/view');
        // Check that the response was a 200
       // $this->assertResponseOk();
        

}

        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

}

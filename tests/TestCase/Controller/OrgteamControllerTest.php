<?php
namespace App\Test\TestCase\Controller;

use App\Controller\OrgteamController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\OrgteamController Test Case
 */
class OrgteamControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = ['app.orgteam'];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->session([ //mock user session
        'Auth' => [
            'User' => [
                'id' => 1,
                // other keys.
            ]
        ]
        ]);
    
        $this->get('/organization/team');
        // Check that the response was a 200
        $this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->session([ //mock user session
        'Auth' => [
            'User' => [
                'id' => 1,
                // other keys.
            ]
        ]
        ]);
    
        $this->get('/orgteam/view/1');
        // Check that the response was a 200
        $this->assertResponseOk();
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->session([
        'Auth' => [
            'User' => [
                'email' => 'xyz@gmail.com',
                'password' => '123456',
                // other keys.
            ]
        ]
        ]);

        $this->get('/organization/team');

        // Check for a 2xx response code
        $response = $this->assertResponseOk();

        $data = [
        'teamid' => 15,
        'teamname' => 'transport',
        'members' => 3,
        'details' => 'raja,avi,asma',
        'volunteeremail' => 'vol1@gmail.com'
        ];
        $this->post('/orgteam/add', $data);

        // Check for a 2xx response code
        $this->assertResponseSuccess();
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        // Set session data
        $this->session([ //mock user session
        'Auth' => [
            'User' => [
                'id' => 1,
                // other keys.
                ]
            ]
        ]);

        $this->get('/organization/team');
        // Check that the response was a 200
        $this->assertResponseOk();

        $this->get('/orgteam/edit/1');
        $this->assertResponseOk();
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        // Set session data
        $this->session([ //mock user session
        'Auth' => [
            'User' => [
                'id' => 1,
                // other keys.
                ]
            ]
        ]);

        $this->get('/organization/team');
        // Check that the response was a 200
        $this->assertResponseOk(); 

        $this->get('/orgteam/delete/1');
        // Check for a 2xx/3xx response code
        $this->assertResponseCode(405); // checking delete method is not allowed to perform without confirmation
    }
}

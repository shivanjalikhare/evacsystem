<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EmergencychecklistController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EmergencychecklistController Test Case
 */
class EmergencychecklistControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.emergencychecklist', 'app.users'
    ];

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
    
        $this->get('/emergencychecklist');
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
        $this->markTestIncomplete('Not implemented yet.');
        // Set session data
        $this->session([
            'Auth' => [
                'User' => [
                    'email' => 'xyz@gmail.com',
                    'password' => '123456',
                // other keys.
                ]
             ]
        ]);

        $this->get('/users/add');

        // Check for a 2xx response code
        $response = $this->assertResponseOk();

        $data = [
        'id' => 15,
        'email' => 'qwerty@gmail.com',
        'password' => 'qwerty',
        'created' => time(),
        'modified' => time()
        ];
        $this->post('/emergencychecklist/add', $data);

        // Check for a 2xx response code
        $this->assertResponseSuccess();
    }


    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        //$this->markTestIncomplete('Not implemented yet.');
         $this->enableRetainFlashMessages();
        
        $this->session([ //mock user session
        'Auth' => [
            'User' => [
                'id' => 3,
                // other keys.
            ]
            ]
        ]);
        $this->get('/login');
        $this->assertSession('You are already logged in.', 'Flash.flash.0.message');
        $this->assertSession(3, 'Auth.User.id'); //check if the user is logged in

        $this->get('/emergencychecklist/delete');

        // Check for a 2xx/3xx response code
        $this->assertResponseSuccess();


    }
}

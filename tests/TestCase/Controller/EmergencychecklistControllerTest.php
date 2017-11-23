<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EmergencychecklistController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;

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
    public $fixtures = ['app.emergencychecklist'];

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

        $this->get('/emergencychecklist/add');
        $response = $this->assertResponseOk();

        $data = [
        'id' => 15,
        'checklist' => 'test item'

        ];
        $this->post('/emergencychecklist/add', $data);

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
        //$this->markTestIncomplete('Not implemented yet.');
        // Set session data
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

        $this->get('/users/edit/2');
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

        $this->get('/emergencychecklist');
        // Check that the response was a 200
        $this->assertResponseOk(); 

        $this->get('/emergencychecklist/delete/2');
        // Check for a 2xx/3xx response code
        $this->assertResponseCode(405); // checking delete method is not allowed to perform without confirmation  
    }
}

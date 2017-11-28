<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ResourcesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ResourcesController Test Case
 */
class ResourcesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = ['app.resources'];

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
    
        $this->get('/resources');
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
        //$this->markTestIncomplete('Not implemented yet.');
        $this->session([ //mock user session
        'Auth' => [
            'User' => [
                'id' => 1,
                // other keys.
            ]
        ]
        ]);
    
        $this->get('/resources/view/1');
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

        $this->get('/resources');

        // Check for a 2xx response code
        $response = $this->assertResponseOk();

        $data = [
        'id' => 15,
        'type' => 'transport',
        'description' => 'micro bus',
        'quantity' => 5,
        'volunteeremail' => 'vol1@gmail.com'
        ];
        $this->post('/resources/add', $data);

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

        $this->get('/resources');
        // Check that the response was a 200
        $this->assertResponseOk();

        $this->get('/resources/edit/1');
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

        $this->get('/resources');
        // Check that the response was a 200
        $this->assertResponseOk(); 

        $this->get('/resources/delete/2');
        // Check for a 2xx/3xx response code
        $this->assertResponseCode(405); // checking delete method is not allowed to perform without confirmation
    }
}

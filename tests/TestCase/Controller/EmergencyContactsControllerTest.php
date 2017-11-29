<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EmergencyContactsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EmergencyContactsController Test Case
 */
class EmergencyContactsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = ['app.emergency_contacts'];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
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
    
        $this->get('/users/emergency');
        // Check that the response was a 200
        $this->assertResponseOk();

    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testsendEmail()
    {
        //$this->markTestIncomplete('Not implemented yet.');
        $this->enableRetainFlashMessages();
        $this->session([ //mock user session
            'Auth' => [
                'User' => [
                'id' => 1,
                // other keys.
                ]
            ]
        ]);
        $this->get('/users'); //get the list of users
        $this->assertSession(1, 'Auth.User.id'); //check if the user is logged in

        $emailObject = new EmergencyContactsController();
        $emailObject->sendEmail('razin2good@gmail.com');
        $this->assertSession('Email sent.', 'Flash.flash.0.message');

    }

    /**
     * Test add method
     *
     * @test
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
    
        $this->get('/users/emergency/add');
        // Check that the response was a 200
        $this->assertResponseOk();

        $data = [
        'eid' => 15,
        'etype' => 'qwerty@gmail.com',
        'name' => 'qwerty',
        'phone' => '123456',
        'email' => 'axz@gmail.com',
        'Address'=> '200 East Lewis Street'
        ];
        $this->post('/users/emergency/add', $data);

        // Check for a 2xx response code
        $this->assertResponseSuccess();

    }
	
	/**
     * Test delete method
     *
     * @test
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

        $this->get('/users/emergency');
        // Check that the response was a 200
        $this->assertResponseOk(); 

        $this->get('/users/emergency/delete');
        // Check for a 2xx/3xx response code
        $this->assertResponseCode(405); // checking delete method is not allowed to perform without confirmation
       
    }

}

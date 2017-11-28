<?php
namespace App\Test\TestCase\Controller;

use App\Controller\VolunteerregistrationController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\VolunteerregistrationController Test Case
 */
class VolunteerregistrationControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = ['app.volunteerregistration'];

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
    
        $this->get('/Volunteer/volunteerregistration');
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
    
        $this->get('/volunteerregistration/view/1');
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
        //$this->markTestIncomplete('Not implemented yet.');
        $this->session([
        'Auth' => [
            'User' => [
                'email' => 'xyz@gmail.com',
                'password' => '123456',
                // other keys.
            ]
        ]
        ]);

        $this->get('/Volunteer/volunteerregistration');

        // Check for a 2xx response code
        $response = $this->assertResponseOk();

        $data = [
        'regid' => 30,
        'name' => 'maruf',
        'emailid' => 'maruf.hasan@gmail.com',
        'profession' => 'doctor',
        'supporttype' => 'medical help',
        'location' => 'Lafayette',
        'notes' => 'I can help people with first aid service.'
        ];
        $this->post('/volunteerregistration/add', $data);

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

        $this->get('/Volunteer/volunteerregistration');
        // Check that the response was a 200
        $this->assertResponseOk();

        $this->get('/volunteerregistration/edit/1');//only registered logged in user can edit his/her information so id = 1.
        $this->assertResponseOk();
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
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

        $this->get('/Volunteer/volunteerregistration');
        // Check that the response was a 200
        $this->assertResponseOk(); 

        $this->get('/volunteerregistration/delete/4');
        // Check for a 2xx/3xx response code
        $this->assertResponseCode(405); // checking delete method is not allowed to perform without confirmation
    }
}

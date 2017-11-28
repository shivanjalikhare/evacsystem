<?php
namespace App\Test\TestCase\Controller;

use App\Controller\OrganizationController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\OrganizationController Test Case
 */
class OrganizationControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = ['app.organization'];

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
    
        $this->get('/Volunteer/organization');
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
    
        $this->get('/organization/view/1');
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
        $this->markTestIncomplete('Not used in project.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not used in project.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not used in project.');
    }

    /**
     * Test send email method
     *
     * @return void
     */
    public function testsendEmailtoOrganization()
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

        $emailObject = new OrganizationController();
        $emailObject->sendEmail('razin2good@gmail.com');
        $this->assertSession('Email sent.', 'Flash.flash.0.message');

    }
}

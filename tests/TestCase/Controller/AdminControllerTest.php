<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AdminController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;

/**
 * App\Controller\AdminController Test Case
 */
class AdminControllerTest extends IntegrationTestCase
{
	/**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = ['app.users'];

    /**
     * Test index method
     *
     * @return void
     */
    public function testindexUsersAdmin()
    {
        $this->session([ //mock user session
        'Auth' => [
            'User' => [
                'id' => 1,
                // other keys.
            ]
        ]
        ]);
    
        $this->get('/admin/index-users-admin');
        // Check that the response was a 200
        $this->assertResponseOk();

    }

     /**
     * Test add method
     *
     * @test
     */
    public function testAdd()
    {
        // Set session data
	    $this->session([
	        'Auth' => [
	            'User' => [
	                'email' => 'admin@evac.com',
	                'password' => 'admin',
	                // other keys.
	            ]
	        ]
	    ]);

        $this->get('/admin/index-users-admin');
        // Check that the response was a 200
        $this->assertResponseOk();

        $data = [
        'id' => 15,
        'email' => 'qwerty@gmail.com',
        'password' => 'qwerty',
        'created' => time(),
        'modified' => time()
        ];
        $this->post('/admin/add', $data);

        // Check for a 2xx response code
        $this->assertResponseSuccess();

    }

    /**
     * Test edit method
     *
     * @test
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

        $this->get('/admin/index-users-admin');
        // Check that the response was a 200
        $this->assertResponseOk();   


        $this->get('/admin/edit/1');
        $this->assertResponseOk();
        
    }

    /**
     * Test login method
     *
     * @test
     */
    public function adminlogin()
    {
        //$this->enableRetainFlashMessages();
        
       // Set session data
	    $this->session([
	        'Auth' => [
	            'User' => [
	                'id' => 1,
	                // other keys.
	            ]
	        ]
	    ]);
	    //$this->get('/admin/admin-user-dashboard');
	    //$this->assertSession('Admin Login Successful!.', 'Flash.flash.0.message');
        $this->get('/admin');
        $this->assertSession('Admin Login Successful!.', 'Flash.flash.0.message');
        //$this->assertSession(3, 'Auth.User.id'); //check if the user is logged in
     }

     /**
     * Test login Failure
     *
     * @test
     */
     public function testLoginFailure()
     {
        $this->enableRetainFlashMessages();
        $this->enableCsrfToken();
        $this->enableSecurityToken();

        $this->post('/', [
            'email' => 'razin2good@gmail.com',
            'password' => '1234'
        ]);

        $this->assertNull($this->_requestSession->read('Auth.User'));

        $this->assertSession('Sorry, the login was not successful', 'Flash.flash.0.message');
    } 

}    
<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;

/**
 * App\Controller\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users'
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
    
        $this->get('/users/add');
        // Check that the response was a 200
        $this->assertResponseOk();

    }

    /**
     * Test view method
     *@test
     */
    /**public function testView()
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

        $this->get('/users/view/2');

        // Check for a 2xx response code
        $this->assertResponseOk();

        // Assert partial response content
        $this->assertResponseContains('jane.doe');
    } */

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
        $this->post('/users/add', $data);

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

        $this->get('/users/index');
        // Check that the response was a 200
        $this->assertResponseOk();   


        $this->get('/users/edit/1');
        $this->assertResponseOk();
        
    }

    /**
     * Test delete method
     *
     * @test
     */
    
    public function testDelete()
    {
        //this TC is passed. But need to analyze more to identify the process.
        $this->delete('/delete/2');
        // Check for a 2xx/3xx response code
        //$this->assertResponseSuccess();

        $users = TableRegistry::get('Users');
        $data = $users->find()->where(['id' => 2]);
        $this->assertEquals(0, $data->count());
    }

    /**
     * Test signup method
     *
     * @test
     */
    
   /** public function testsignup()
    {
        $this->enableRetainFlashMessages();
        $this->get('/signup');
        $this->assertSession('The user has been saved.', 'Flash.flash.0.message');
    }*/

    /**
     * Test signup method
     *
     * @test
     */
    public function testSignup()
    {
        $result = $this->get("/signup", array(
            "method" => "get",
            "email" => "abx@gmail.com"
        ));

        $this->assertContains("data[User][email]",$result);
    }
        
    

    /**
     * Test logout method
     *
     * @test
     */
    public function testlogout()
    {
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
     $this->get('/logout'); // logout user
     $this->assertSession('You are logged out', 'Flash.flash.0.message');
     $this->assertSession(null,'Auth.User'); //check if the user is logged out

    }

    /**
     * Test login method
     *
     * @test
     */
    public function testLogin()
    {
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
       
        

    }
}
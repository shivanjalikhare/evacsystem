<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace Cake\Test\TestCase\Auth;
use Cake\Auth\BasicAuthenticate;
use Cake\Controller\ComponentRegistry;
use Cake\Http\Response;
use Cake\Http\ServerRequest;
use Cake\I18n\Time;
use Cake\Network\Exception\UnauthorizedException;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * Test case for BasicAuthentication
 */
class BasicAuthenticateTest extends TestCase
{
    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = ['core.auth_users', 'core.users'];
    /**
     * setup
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Collection = $this->getMockBuilder(ComponentRegistry::class)->getMock();
        $this->auth = new BasicAuthenticate($this->Collection, [
            'userModel' => 'Users',
            'realm' => 'localhost'
        ]);
        $password = password_hash('password', PASSWORD_BCRYPT);
        $User = TableRegistry::get('Users');
        $User->updateAll(['password' => $password], []);
        $this->response = $this->getMockBuilder(Response::class)->getMock();
    }
    /**
     *@test applying settings in the constructor
     *
     * @return void
     */
    public function testConstructor()
    {
        $object = new BasicAuthenticate($this->Collection, [
            'userModel' => 'AuthUser',
            'fields' => ['username' => 'user', 'password' => 'password']
        ]);
        $this->assertEquals('AuthUser', $object->config('userModel'));
        $this->assertEquals(['username' => 'user', 'password' => 'password'], $object->config('fields'));
    }
    /**
     *@test the authenticate method
     *
     * @return void
     */
    public function testAuthenticateNoData()
    {
        $request = new ServerRequest('posts/index');
        $this->response->expects($this->never())
            ->method('header');
        $this->assertFalse($this->auth->getUser($request));
    }
    /**
     *@test the authenticate method
     *
     * @return void
     */
    public function testAuthenticateNoUsername()
    {
        $request = new ServerRequest([
            'url' => 'posts/index',
            'environment' => ['PHP_AUTH_PW' => 'foobar']
        ]);
        $this->assertFalse($this->auth->authenticate($request, $this->response));
    }
	 /**
     * test the authenticate method
     *
     * @return void
     */
    public function testAuthenticateNoPassword()
    {
        $request = new ServerRequest([
            'url' => 'posts/index',
            'environment' => ['PHP_AUTH_USER' => 'mariano']
        ]);
        $this->assertFalse($this->auth->authenticate($request, $this->response));
    }

	 /**
     *@test authenticate success
     *
     * @return void
     */
    public function testAuthenticateSuccess()
    {
        $request = new ServerRequest([
            'url' => '/',
            'environment' => [
                'PHP_AUTH_USER' => 'Shivanjali.khare@gmail.com',
                'PHP_AUTH_PW' => '123456'
            ]
        ]);
        $request->addParams(['pass' => []]);
        $result = $this->auth->authenticate($request, $this->response);
        $expected = [
            'id' => 3,
            'username' => 'Shivanjali.khare@gmail.com',
            'created' => new Time('2007-03-17 01:16:23'),
            'updated' => new Time('2007-03-17 01:18:31')
        ];
        $this->assertEquals($expected, $result);
    }
	
}
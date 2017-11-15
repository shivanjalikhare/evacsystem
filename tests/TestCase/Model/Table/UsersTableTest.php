<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;


/**
 * App\Model\Table\UsersTable Test Case
 */
class UsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersTable
     */
    public $Users;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Users') ? [] : ['className' => UsersTable::class];
        $this->Users = TableRegistry::get('Users', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Users);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        
        $this->Users->initialize([]); //have to call manually to get coverage.
        $this->assertEquals(
            'id',
            $this->Users->primaryKey(),
            'The [Users]Table default primary key is expected to be `id`.'
        );
        $expectedBehaviors = 'Timestamp';
        $this->assertTrue(
                $this->Users->behaviors()->has($expectedBehaviors),
                "Cursory sanity check. The [Users]Table table is expected to use the $expectedBehaviors behavior."
            );
       

        
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        //using fixture
        $data = [
        'id' => 1,
            'email' => 'razin2good@gmail.com',
            'password' => '123456',
            'phone' => '3374428237',
            'created' => '2017-10-14 00:01:56',
            'modified' => '2017-10-14 00:01:56'
        ];
        $user = $this->Users->newEntity($data);
        $this->assertEmpty($user->errors());

    }


    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault_CheckFields() {
        $validator = new \Cake\Validation\Validator(); //object
        $validator = $this->Users->validationDefault($validator);
        $this->assertTrue($validator->hasField('id'));
        $this->assertTrue($validator->hasField('email'));
        $this->assertTrue($validator->hasField('phone'));
        $this->assertTrue($validator->hasField('password'));  
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
       $comment =  $this->Users->newEntity([
            'email' => 'thomas.eden@gmail.com'
            
        ]);

        $result = $this->Users->checkRules($comment);
        $this->assertFalse($result);
    }
}

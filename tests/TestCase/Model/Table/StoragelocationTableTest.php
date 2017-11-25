<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StoragelocationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Storagelocation Test Case
 */
class StoragelocationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\Storagelocation
     */
    public $Storagelocation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.storagelocation'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Storagelocation') ? [] : ['className' => StoragelocationTable::class];
        $this->Storagelocation = TableRegistry::get('Storagelocation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Storagelocation);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
     public function testInitialize()
    {
        $this->Storagelocation->initialize([]); //have to call manually to get coverage.
        $this->assertEquals(
            'id',
            $this->Storagelocation->primaryKey(),
            'The [Users]Table default primary key is expected to be `id`.'
        );
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $data = [
        'id' => 15,
        'email' => 'qwerty@gmail.com',
        'password' => 'qwerty',
        'created' => time(),
        'modified' => time()
        ];

        $storagelocation = $this->Storagelocation->newEntity($data);
        $this->assertEmpty($storagelocation->errors());
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault_CheckFields() {
        $validator = new \Cake\Validation\Validator(); //object
        $validator = $this->Storagelocation->validationDefault($validator);
        $this->assertTrue($validator->hasField('id'));
        $this->assertTrue($validator->hasField('city'));
         
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
     public function testBuildRules()
    {
        $comment =  $this->Storagelocation->newEntity([
            'city' => 'Lafayette'
            
        ]);
        $result = $this->Storagelocation->checkRules($comment);
        $this->assertFalse($result);
    }
}

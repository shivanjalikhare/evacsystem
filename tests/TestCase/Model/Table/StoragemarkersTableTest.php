<?php
namespace App\Test\TestCase\Model\Table;
use App\Model\Table\StoragemarkersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
/**
 * App\Model\Table\StoragemarkersTable Test Case
 */
class StoragemarkersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StoragemarkersTable
     */
    public $Storagemarkers;
    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.storagemarkers'
    ];
    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Storagemarkers') ? [] : ['className' => StoragemarkersTable::class];
        $this->Storagemarkers = TableRegistry::get('Storagemarkers', $config);
    }
    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Storagemarkers);
        parent::tearDown();
    }
    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
         
        $this->Storagemarkers->initialize([]); //have to call manually to get coverage.
        $this->assertEquals(
            'id',
            $this->Storagemarkers->primaryKey(),
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
        'id' => 1,
            'name' => 'Lafayette',
            'address' => '2000 Johnston Street',
            'lat' => 1,
            'lng' => 1,
            'type' => 'Storage'
        ];
        $storagemarkers = $this->Storagemarkers->newEntity($data);
        $this->assertEmpty($storagemarkers->errors());
    }
    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault_CheckFields() {
        
        $validator = new \Cake\Validation\Validator(); //object
        $validator = $this->Storagemarkers->validationDefault($validator);
        $this->assertTrue($validator->hasField('id'));
        $this->assertTrue($validator->hasField('name'));
        $this->assertTrue($validator->hasField('address'));
        $this->assertTrue($validator->hasField('lat')); 
        $this->assertTrue($validator->hasField('lng'));
        $this->assertTrue($validator->hasField('type'));  
    }
}.
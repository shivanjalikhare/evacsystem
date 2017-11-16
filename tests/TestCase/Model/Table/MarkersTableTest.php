<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MarkersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MarkersTable Test Case
 */
class MarkersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MarkersTable
     */
    public $Markers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.markers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Markers') ? [] : ['className' => MarkersTable::class];
        $this->Markers = TableRegistry::get('Markers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Markers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
       $this->Markers->initialize([]); //have to call manually to get coverage.
        $this->assertEquals(
            'id',
            $this->Markers->primaryKey(),
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
            'address' => '2509 West pinhook',
            'lat' => 1,
            'lng' => 1,
            'type' => 'Marker'
        ];

        $markers = $this->Markers->newEntity($data);
        $this->assertEmpty($markers->errors());
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault_CheckFields() {
        $validator = new \Cake\Validation\Validator(); //object
        
        $validator = $this->Markers->validationDefault($validator);
        $this->assertTrue($validator->hasField('id'));
        $this->assertTrue($validator->hasField('name'));
        $this->assertTrue($validator->hasField('address'));
        $this->assertTrue($validator->hasField('lat'));  
        $this->assertTrue($validator->hasField('lng')); 
        $this->assertTrue($validator->hasField('type')); 
    }

}

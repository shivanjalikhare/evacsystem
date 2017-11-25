<?php
namespace App\Test\TestCase\Model\Table;
use App\Model\Table\LocationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
/**
 * App\Model\Table\LocationsTable Test Case
 */
class LocationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LocationsTable
     */
    public $Locations;
    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.locations'
    ];
    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Locations') ? [] : ['className' => LocationsTable::class];
        $this->Locations = TableRegistry::get('Locations', $config);
    }
    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Locations);
        parent::tearDown();
    }
    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->Locations->initialize([]); //have to call manually to get coverage.
        $this->assertEquals(
            'id',
            $this->Locations->primaryKey(),
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
         'city' => 'Lafayette'
        ];
        $locations = $this->Locations->newEntity($data);
        $this->assertEmpty($locations->errors());
    }
    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault_CheckFields() {
        $validator = new \Cake\Validation\Validator(); //object
        $validator = $this->Locations->validationDefault($validator);
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
        $comment =  $this->Locations->newEntity([
            'city' => 'Lafayette'
            
        ]);
        $result = $this->Locations->checkRules($comment);
        $this->assertFalse($result);
    }
}
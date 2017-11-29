<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResourcesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResourcesTable Test Case
 */
class ResourcesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResourcesTable
     */
    public $Resources;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = ['app.resources'];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Resources') ? [] : ['className' => ResourcesTable::class];
        $this->Resources = TableRegistry::get('Resources', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Resources);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        //$this->markTestIncomplete('Not implemented yet.');
        $this->Resources->initialize([]); //have to call manually to get coverage.
        $this->assertEquals(
            'id',
            $this->Resources->primaryKey(),
            'The [Resources]Table default primary key is expected to be `id`.'
        );
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        //checking all the fields are given for creating new entity
        $data = [
            'id' => 9,
            'type' => 'Transport',
            'description' => 'Minibus',
            'quantity' => 5,
            'volunteeremail' => 'razin2good@gmail.com'
        ];


        $user = $this->Resources->newEntity($data);
        $this->assertEmpty($user->errors());

    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault_CheckFields() {
        $validator = new \Cake\Validation\Validator(); //object
        $validator = $this->Resources->validationDefault($validator);
        $this->assertTrue($validator->hasField('id'));
        $this->assertTrue($validator->hasField('type'));
        $this->assertTrue($validator->hasField('description'));
        $this->assertTrue($validator->hasField('quantity'));
        $this->assertTrue($validator->hasField('volunteeremail'));   
    }

    /**
     * Test fixture records of specific email id
     *
     * @return void
     */
     public function testFixtureRecordExits()
     {
       
        $data = $this->Resources->find()->where(['volunteeremail' => 'razin2good@gmail.com']);
        $this->assertEquals(1, $data->count());

     }

      /**
     * Test fixture records of similar type
     *
     * @return void
     */
     public function testFixtureRecordsWithSameType()
     {
       
        $data = $this->Resources->find()->where(['type' => 'Transport']);
        $this->assertEquals(2, $data->count());

     }
}

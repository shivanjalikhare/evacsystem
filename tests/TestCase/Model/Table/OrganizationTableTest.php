<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrganizationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrganizationTable Test Case
 */
class OrganizationTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrganizationTable
     */
    public $Organization;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = ['app.organization'];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Organization') ? [] : ['className' => OrganizationTable::class];
        $this->Organization = TableRegistry::get('Organization', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Organization);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->Organization->initialize([]); //have to call manually to get coverage.
        $this->assertEquals(
            'orgid',
            $this->Organization->primaryKey(),
            'The [Organization]Table default primary key is expected to be `id`.'
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
            'orgid' => 1,
            'type' => 'Private',
            'name' => 'Organization 1',
            'address' => '200 East Lewis Street, LA, 70503',
            'orgemail' => 'razin2good@gmail.com',
            'phone' => 12734521,
            'webaddress' => 'www.org1.com'
        ];


        $user = $this->Organization->newEntity($data);
        $this->assertEmpty($user->errors());// this TC will fail if the phone field is exeds integer range

    }

    /**
     * Test validationDefault field check method
     *
     * @return void
     */
    public function testValidationDefault_CheckFields() {
        $validator = new \Cake\Validation\Validator(); //object
        $validator = $this->Organization->validationDefault($validator);
        $this->assertTrue($validator->hasField('orgid'));
        $this->assertTrue($validator->hasField('type'));
        $this->assertTrue($validator->hasField('name'));
        $this->assertTrue($validator->hasField('address'));
        $this->assertTrue($validator->hasField('orgemail'));
        $this->assertTrue($validator->hasField('phone')); 
        $this->assertTrue($validator->hasField('webaddress'));    
    }

    /**
     * Test fixture records of specific email id
     *
     * @return void
     */
     public function testFixtureRecordExits()
     {
       
        $data = $this->Organization->find()->where(['orgemail' => 'razinfh@gmail.com']);
        $this->assertEquals(1, $data->count());

     }

      /**
     * Test fixture records of similar type
     *
     * @return void
     */
     public function testFixtureRecordsWithSameType()
     {
       
        $data = $this->Organization->find()->where(['type' => 'Private']);
        $this->assertEquals(2, $data->count());

     }
}

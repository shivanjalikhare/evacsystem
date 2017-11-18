<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmergencyContactsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmergencyContactsTable Test Case
 */
class EmergencyContactsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmergencyContactsTable
     */
    public $EmergencyContacts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.emergency_contacts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EmergencyContacts') ? [] : ['className' => EmergencyContactsTable::class];
        $this->EmergencyContacts = TableRegistry::get('EmergencyContacts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmergencyContacts);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->EmergencyContacts->initialize([]); //have to call manually to get coverage.
        $this->assertEquals(
            'eid',
            $this->EmergencyContacts->primaryKey(),
            'The [EmergencyContacts]Table default primary key is expected to be `id`.'
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
            'eid' => 1,
            'etype' => '1',
            'name' => 'Shivanjali',
            'phone' => '3378655423',
            'email' => 'Shivanjali.123@gmail.com',
            'Address' => '234 West pinhook'
        ];
        $emergencycontacts = $this->EmergencyContacts->newEntity($data);
        $this->assertEmpty($emergencycontacts->errors());
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault_CheckFields() {

        $validator = new \Cake\Validation\Validator(); //object

        $validator = $this->EmergencyContacts->validationDefault($validator);

        $this->assertTrue($validator->hasField('eid'));
        $this->assertTrue($validator->hasField('etype'));
        $this->assertTrue($validator->hasField('phone'));
        $this->assertTrue($validator->hasField('password'));  
        $this->assertTrue($validator->hasField('email'));
        $this->assertTrue($validator->hasField('Address'));  
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
         $comment =  $this->EmergencyContacts->newEntity([
            'email' => 'shivanjali.khare@gmail.com'
            
        ]);

        $result = $this->EmergencyContacts->checkRules($comment);
        $this->assertFalse($result);
    }
}

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
        $this->markTestIncomplete('Not implemented yet.');
    }

	 /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        // mock input data
        $data = [
        'etype' => 'transport',
        'name' => 'Lafayette Evacuation Transport System',
        'phone' => '3374531208',
        'email' => 'thomas.eden@gmail.com',
        'Address' => '254 east lewis street, Lafayette, LA - 70503'
        ];

        // create new object/data to check validation
        $emergencycontacts = $this->EmergencyContacts->newEntity($data);

        // no errors
        $this->assertEmpty($emergencycontacts->errors());
    }
	
    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

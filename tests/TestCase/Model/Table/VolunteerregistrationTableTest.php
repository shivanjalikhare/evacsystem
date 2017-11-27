<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VolunteerregistrationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VolunteerregistrationTable Test Case
 */
class VolunteerregistrationTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VolunteerregistrationTable
     */
    public $Volunteerregistration;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.volunteerregistration'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Volunteerregistration') ? [] : ['className' => VolunteerregistrationTable::class];
        $this->Volunteerregistration = TableRegistry::get('Volunteerregistration', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Volunteerregistration);

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
        $this->markTestIncomplete('Not implemented yet.');
    }
}

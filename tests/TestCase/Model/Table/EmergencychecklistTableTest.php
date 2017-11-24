<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmergencychecklistTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmergencychecklistTable Test Case
 */
class EmergencychecklistTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmergencychecklistTable
     */
    public $Emergencychecklist;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.emergencychecklist'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Emergencychecklist') ? [] : ['className' => EmergencychecklistTable::class];
        $this->Emergencychecklist = TableRegistry::get('Emergencychecklist', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Emergencychecklist);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->Emergencychecklist->initialize([]); //have to call manually to get coverage.
        $this->assertEquals(
            'id',
            $this->Emergencychecklist->primaryKey(),
            'The [Emergencychecklist]Table default primary key is expected to be `id`.'
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
            'checklist' => 'Fuel'
        ];
        $user = $this->Emergencychecklist->newEntity($data);
        $this->assertEmpty($user->errors());
    }
}

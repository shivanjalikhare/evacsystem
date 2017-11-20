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
        $this->markTestIncomplete('Not implemented yet.');
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

        $storagemarkers = $this->Storagemarkers->newEntity($data);
        $this->assertEmpty($storagemarkers->errors());
    }
}

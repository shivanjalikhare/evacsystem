<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StoragelocationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Storagelocation Test Case
 */
class StoragelocationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\Storagelocation
     */
    public $Storagelocation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.storagelocation'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Storagelocation') ? [] : ['className' => StoragelocationTable::class];
        $this->Storagelocation = TableRegistry::get('Storagelocation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Storagelocation);

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

        $storagelocation = $this->Storagelocation->newEntity($data);
        $this->assertEmpty($storagelocation->errors());
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

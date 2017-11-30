<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrgteamTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrgteamTable Test Case
 */
class OrgteamTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrgteamTable
     */
    public $Orgteam;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.orgteam'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Orgteam') ? [] : ['className' => OrgteamTable::class];
        $this->Orgteam = TableRegistry::get('Orgteam', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Orgteam);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->Orgteam->initialize([]); //have to call manually to get coverage.
        $this->assertEquals(
            'teamid',
            $this->Orgteam->primaryKey(),
            'The [Orgteam]Table default primary key is expected to be `teamid`.'
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
            'teamid' => 1,
            'teamname' => 'Evac1',
            'members' => 3,
            'details' => 'Razin, Shan, Arman',
            'contact' => 'razinfh@outlook.com'
        ];


        $user = $this->Orgteam->newEntity($data);
        $this->assertEmpty($user->errors());
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault_CheckFields() {
        $validator = new \Cake\Validation\Validator(); //object
        $validator = $this->Orgteam->validationDefault($validator);
        $this->assertTrue($validator->hasField('teamid'));
        $this->assertTrue($validator->hasField('teamname'));
        $this->assertTrue($validator->hasField('members'));
        $this->assertTrue($validator->hasField('details'));
        $this->assertTrue($validator->hasField('contact'));   
    }

    /**
     * Test fixture records of similar type
     *
     * @return void
     */
     public function testFixtureRecordExits()
     {
       
        $data = $this->Orgteam->find()->where(['contact' => 'razin2good@gmail.com']);
        $this->assertEquals(1, $data->count());

     }

      /**
     * Test fixture records of similar type
     *
     * @return void
     */
     public function testFixtureRecordsWithSameType()
     {
       
        $data = $this->Orgteam->find()->where(['teamname' => 'Evac1']);
        $this->assertEquals(1, $data->count());

     }
}

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
        $this->Volunteerregistration->initialize([]); //have to call manually to get coverage.
        $this->assertEquals(
            'regid',
            $this->Volunteerregistration->primaryKey(),
            'The [Volunteerregistration]Table default primary key is expected to be `regid`.'
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
            'regid' => 1,
            'name' => 'Abbas Rahman',
            'emailid' => 'abbas26@gmail.com',
            'profession' => 'Doctor',
            'supporttype' => 'Medical help',
            'location' => 'New Orleans',
            'notes' => 'I can help with medicine.'
        ];


        $user = $this->Volunteerregistration->newEntity($data);
        $this->assertEmpty($user->errors());
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault_CheckFields() {
        $validator = new \Cake\Validation\Validator(); //object
        $validator = $this->Volunteerregistration->validationDefault($validator);
        $this->assertTrue($validator->hasField('regid'));
        $this->assertTrue($validator->hasField('name'));
        $this->assertTrue($validator->hasField('emailid'));
        $this->assertTrue($validator->hasField('profession'));
        $this->assertTrue($validator->hasField('supporttype'));
        $this->assertTrue($validator->hasField('location'));
        $this->assertTrue($validator->hasField('location'));   
    }

     /**
     * Test fixture records of similar type
     *
     * @return void
     */
     public function testFixtureRecordExits()
     {
       
        $data = $this->Volunteerregistration->find()->where(['emailid' => 'abbas26@gmail.com']);
        $this->assertEquals(1, $data->count());

     }

      /**
     * Test fixture records of similar type
     *
     * @return void
     */
     public function testFixtureRecordsWithSameType()
     {
       
        $data = $this->Volunteerregistration->find()->where(['profession' => 'Doctor']);
        $this->assertEquals(2, $data->count());

     }
}

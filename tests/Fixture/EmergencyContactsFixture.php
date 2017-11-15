<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmergencyContactsFixture
 *
 */
class EmergencyContactsFixture extends TestFixture
{



	public $import = ['table' => 'emergency_contacts'];

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'eid' => ['type' => 'integer', 'length' => 200, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'etype' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'phone' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Address' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['eid'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [

            'eid' => 1,
            'etype' => 'Lorem ipsum dolor sit amet',
            'name' => 'Lorem ipsum dolor sit amet',
            'phone' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'Address' => 'Lorem ipsum dolor sit amet'
        ],

            'etype' => 'transport',
            'name' => 'Lafayette Evacuation Transport System',
            'phone' => '3374531208',
            'email' => 'thomas.eden@gmail.com',
            'Address' => '254 east lewis street, Lafayette, LA - 70503'
        ],
        [
            'etype' => 'transport',
            'name' => 'Lafayette General Medical Center',
            'phone' => '3372897991',
            'email' => 'lafayettegeneral@gmail.com',
            'Address' => '1214 Coolidge Street Lafayette, LA 70503'
        ],
        [
            'etype' => 'Food',
            'name' => 'Evacuation Emergency Food Service',
            'phone' => '3375626512',
            'email' => 'evac.food@example.com',
            'Address' => '1103 W Pinhook Rd, Lafayette, LA 70503'
        ]


    ];
}

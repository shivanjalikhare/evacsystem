<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VolunteerregistrationFixture
 *
 */
class VolunteerregistrationFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'volunteerregistration';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'regid' => ['type' => 'integer', 'length' => 100, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'emailid' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'profession' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'supporttype' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'location' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'notes' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['regid'], 'length' => []],
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
            'regid' => 1,
            'name' => 'Abbas Rahman',
            'emailid' => 'abbas26@gmail.com',
            'profession' => 'Doctor',
            'supporttype' => 'Medical help',
            'location' => 'New Orleans',
            'notes' => 'I can help with medicine.'
        ],
        [
            'regid' => 2,
            'name' => 'Mina Khan',
            'emailid' => 'mik@gmail.com',
            'profession' => 'Teacher',
            'supporttype' => 'Transport',
            'location' => 'Michigan',
            'notes' => 'I can help with transportation.'
        ],
        [
            'regid' => 3,
            'name' => 'Mizan Hussain',
            'emailid' => 'mizan567@gmail.com',
            'profession' => 'Doctor',
            'supporttype' => 'Medical help',
            'location' => 'New York',
            'notes' => 'I can help with medicine.'
        ],

    ];
}

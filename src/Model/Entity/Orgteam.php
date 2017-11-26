<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Orgteam Entity
 *
 * @property int $teamid
 * @property string $teamname
 * @property int $members
 * @property string $details
 * @property string $contact
 */
class Orgteam extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'teamname' => true,
        'members' => true,
        'details' => true,
        'contact' => true
    ];
}

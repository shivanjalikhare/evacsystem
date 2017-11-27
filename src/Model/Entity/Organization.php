<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Organization Entity
 *
 * @property int $orgid
 * @property string $type
 * @property string $name
 * @property string $address
 * @property string $orgemail
 * @property int $phone
 * @property string $webaddress
 */
class Organization extends Entity
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
        'type' => true,
        'name' => true,
        'address' => true,
        'orgemail' => true,
        'phone' => true,
        'webaddress' => true
    ];
}

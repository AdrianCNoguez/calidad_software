<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Red Entity
 *
 * @property int $id
 * @property string $Tw
 * @property string $Fb
 * @property string $Insta
 * @property int $equipo_id
 *
 * @property \App\Model\Entity\Equipo $equipo
 */
class Red extends Entity
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
        'Tw' => true,
        'Fb' => true,
        'Insta' => true,
        'equipo_id' => true,
        'equipo' => true,
    ];
}

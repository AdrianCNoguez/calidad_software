<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Direccion Entity
 *
 * @property int $id
 * @property string $calle
 * @property int $No
 * @property int $Cp
 * @property int $colonia_id
 *
 * @property \App\Model\Entity\Colonium $colonium
 */
class Direccion extends Entity
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
        'calle' => true,
        'No' => true,
        'Cp' => true,
        'colonia_id' => true,
        'colonium' => true,
    ];
}

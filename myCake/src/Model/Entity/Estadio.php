<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estadio Entity
 *
 * @property int $id
 * @property string $sede
 * @property int $capacidad
 * @property int $direccion_id
 *
 * @property \App\Model\Entity\Direccion $direccion
 */
class Estadio extends Entity
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
        'sede' => true,
        'capacidad' => true,
        'direccion_id' => true,
        'direccion' => true,
    ];
}

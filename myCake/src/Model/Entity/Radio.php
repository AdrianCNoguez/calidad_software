<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Radio Entity
 *
 * @property int $id
 * @property string $Radiodifusora
 * @property float $sintonia
 * @property int $medios_id
 * @property int $encuentro_id
 *
 * @property \App\Model\Entity\Medio $medio
 * @property \App\Model\Entity\Encuentro $encuentro
 */
class Radio extends Entity
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
        'Radiodifusora' => true,
        'sintonia' => true,
        'medios_id' => true,
        'encuentro_id' => true,
        'medio' => true,
        'encuentro' => true,
    ];
}

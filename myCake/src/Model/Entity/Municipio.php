<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Municipio Entity
 *
 * @property int $id
 * @property string $municipio
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $estado_id
 *
 * @property \App\Model\Entity\Estado $estado
 */
class Municipio extends Entity
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
        'municipio' => true,
        'created' => true,
        'modified' => true,
        'estado_id' => true,
        'estado' => true,
    ];
}

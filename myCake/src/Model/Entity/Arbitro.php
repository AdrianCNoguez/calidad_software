<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Arbitro Entity
 *
 * @property int $id
 * @property string $posicion
 * @property string $partidosJ
 * @property int $ligas_id
 * @property int $encuentro_id
 *
 * @property \App\Model\Entity\Liga $liga
 * @property \App\Model\Entity\Encuentro $encuentro
 */
class Arbitro extends Entity
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
        'posicion' => true,
        'partidosJ' => true,
        'ligas_id' => true,
        'encuentro_id' => true,
        'liga' => true,
        'encuentro' => true,
    ];
}

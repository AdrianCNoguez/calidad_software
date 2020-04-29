<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equipo Entity
 *
 * @property int $id
 * @property string $nomEquipo
 * @property int $Atq
 * @property int $Med
 * @property int $Def
 * @property string $valor
 * @property float $calidad
 * @property int $estadio_id
 *
 * @property \App\Model\Entity\Estadio $estadio
 */
class Equipo extends Entity
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
        'nomEquipo' => true,
        'Atq' => true,
        'Med' => true,
        'Def' => true,
        'valor' => true,
        'calidad' => true,
        'estadio_id' => true,
        'estadio' => true,
    ];
}

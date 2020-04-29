<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tienda Entity
 *
 * @property int $id
 * @property string $Nom_tienda
 * @property int $estadio_id
 * @property int $patrocinador_id
 *
 * @property \App\Model\Entity\Estadio $estadio
 * @property \App\Model\Entity\Patrocinador $patrocinador
 * @property \App\Model\Entity\Articulo[] $articulo
 */
class Tienda extends Entity
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
        'Nom_tienda' => true,
        'estadio_id' => true,
        'patrocinador_id' => true,
        'estadio' => true,
        'patrocinador' => true,
        'articulo' => true,
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Articulo Entity
 *
 * @property int $id
 * @property string $nombreArt
 * @property float $precio
 * @property float $promocion
 * @property int $tienda_id
 *
 * @property \App\Model\Entity\Tienda $tienda
 */
class Articulo extends Entity
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
        'nombreArt' => true,
        'precio' => true,
        'promocion' => true,
        'tienda_id' => true,
        'tienda' => true,
    ];
}

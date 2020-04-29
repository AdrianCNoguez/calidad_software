<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Persona Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidoP
 * @property string $apellidoM
 * @property string $edad
 * @property int $equipo_id
 *
 * @property \App\Model\Entity\Equipo $equipo
 */
class Persona extends Entity
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
        'nombre' => true,
        'apellidoP' => true,
        'apellidoM' => true,
        'edad' => true,
        'equipo_id' => true,
        'equipo' => true,
    ];
}

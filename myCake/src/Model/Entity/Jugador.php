<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jugador Entity
 *
 * @property int $id
 * @property string $Nacionalidad
 * @property float $Estatura
 * @property float $Peso
 * @property string $MovilHabil
 * @property string $Posicion
 * @property string $Perfil
 * @property string $Pie_Debil
 * @property int $persona_id
 *
 * @property \App\Model\Entity\Persona $persona
 */
class Jugador extends Entity
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
        'Nacionalidad' => true,
        'Estatura' => true,
        'Peso' => true,
        'MovilHabil' => true,
        'Posicion' => true,
        'Perfil' => true,
        'Pie_Debil' => true,
        'persona_id' => true,
        'persona' => true,
    ];
}

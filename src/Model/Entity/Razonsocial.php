<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Razonsocial Entity
 *
 * @property int $idRazonSocial
 * @property string $nombreRazon
 * @property string $descripcion
 * @property int $Direccion_idDireccion
 */
class Razonsocial extends Entity
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
        '*' => true,
        'idRazonSocial' => false
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bitacora Entity
 *
 * @property int $idBitacora
 * @property string $operacion
 * @property string $usuario
 * @property string $servidor
 * @property \Cake\I18n\Time $modificado
 * @property string $tabla
 */
class Bitacora extends Entity
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
        'idBitacora' => false
    ];
}

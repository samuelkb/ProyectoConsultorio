<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empleado Entity
 *
 * @property int $idempleado
 * @property string $Puesto
 * @property float $Salario
 * @property int $ConsultorioDental_idConsultorioDental
 * @property int $Usuario_idUsuario
 */
class Empleado extends Entity
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
        'idempleado' => false,
        'ConsultorioDental_idConsultorioDental' => false
    ];
}

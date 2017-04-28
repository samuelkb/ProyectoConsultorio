<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Citum Entity
 *
 * @property int $idCita
 * @property \Cake\I18n\Time $horaInicio
 * @property \Cake\I18n\Time $horaTermino
 * @property string $observaciones
 * @property int $Paciente_idPaciente
 * @property int $empleado_idempleado
 * @property int $empleado_ConsultorioDental_idConsultorioDental
 * @property int $CatalogoServicios_idCatalogoServicios
 * @property int $Pago_idPago
 * @property int $Expediente_idExpediente
 */
class Citum extends Entity
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
        'idCita' => false
    ];
}

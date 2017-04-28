<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Factura Entity
 *
 * @property int $idFactura
 * @property string $RFC
 * @property float $IVA
 * @property float $desglose
 * @property int $Contacto_idContacto
 * @property int $RazonSocial_idRazonSocial
 * @property int $Pago_idPago
 */
class Factura extends Entity
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
        'idFactura' => false
    ];
}

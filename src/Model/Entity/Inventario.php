<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inventario Entity
 *
 * @property int $idInventario
 * @property string $nombreItem
 * @property string $descripcionItem
 * @property int $stock
 * @property \Cake\I18n\Time $fechaDeCaducidad
 * @property int $Categoria_idCategoria
 * @property int $ConsultorioDental_idConsultorioDental
 */
class Inventario extends Entity
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
        'idInventario' => false
    ];
}

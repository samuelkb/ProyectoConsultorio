<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FacturaFixture
 *
 */
class FacturaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'factura';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idFactura' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'RFC' => ['type' => 'string', 'length' => 13, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'IVA' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'desglose' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'Contacto_idContacto' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'RazonSocial_idRazonSocial' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Pago_idPago' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Factura_Contacto1_idx' => ['type' => 'index', 'columns' => ['Contacto_idContacto'], 'length' => []],
            'fk_Factura_RazonSocial1_idx' => ['type' => 'index', 'columns' => ['RazonSocial_idRazonSocial'], 'length' => []],
            'fk_Factura_Pago1_idx' => ['type' => 'index', 'columns' => ['Pago_idPago'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idFactura'], 'length' => []],
            'fk_Factura_Contacto1' => ['type' => 'foreign', 'columns' => ['Contacto_idContacto'], 'references' => ['contacto', 'idContacto'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Factura_Pago1' => ['type' => 'foreign', 'columns' => ['Pago_idPago'], 'references' => ['pago', 'idPago'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Factura_RazonSocial1' => ['type' => 'foreign', 'columns' => ['RazonSocial_idRazonSocial'], 'references' => ['razonsocial', 'idRazonSocial'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'idFactura' => 1,
            'RFC' => 'Lorem ipsum',
            'IVA' => 1,
            'desglose' => 1,
            'Contacto_idContacto' => 1,
            'RazonSocial_idRazonSocial' => 1,
            'Pago_idPago' => 1
        ],
    ];
}

<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReciboFixture
 *
 */
class ReciboFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'recibo';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idRecibo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fechaExpedido' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'Pago_idPago' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Recibo_Pago1_idx' => ['type' => 'index', 'columns' => ['Pago_idPago'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idRecibo'], 'length' => []],
            'fk_Recibo_Pago1' => ['type' => 'foreign', 'columns' => ['Pago_idPago'], 'references' => ['pago', 'idPago'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idRecibo' => 1,
            'fechaExpedido' => '2017-04-27',
            'Pago_idPago' => 1
        ],
    ];
}

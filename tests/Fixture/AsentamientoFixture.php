<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AsentamientoFixture
 *
 */
class AsentamientoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'asentamiento';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idAsentamiento' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombreAsentamiento' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'TipoAsentamiento_idTipoAsentamiento' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'CodigoPostal_idCodigoPostal' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Asentamiento_TipoAsentamiento_idx' => ['type' => 'index', 'columns' => ['TipoAsentamiento_idTipoAsentamiento'], 'length' => []],
            'fk_Asentamiento_CodigoPostal1_idx' => ['type' => 'index', 'columns' => ['CodigoPostal_idCodigoPostal'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idAsentamiento', 'CodigoPostal_idCodigoPostal'], 'length' => []],
            'fk_Asentamiento_CodigoPostal1' => ['type' => 'foreign', 'columns' => ['CodigoPostal_idCodigoPostal'], 'references' => ['codigopostal', 'idCodigoPostal'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Asentamiento_TipoAsentamiento' => ['type' => 'foreign', 'columns' => ['TipoAsentamiento_idTipoAsentamiento'], 'references' => ['tipoasentamiento', 'idTipoAsentamiento'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idAsentamiento' => 1,
            'nombreAsentamiento' => 'Lorem ipsum dolor sit amet',
            'TipoAsentamiento_idTipoAsentamiento' => 1,
            'CodigoPostal_idCodigoPostal' => 1
        ],
    ];
}

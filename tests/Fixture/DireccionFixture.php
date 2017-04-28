<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DireccionFixture
 *
 */
class DireccionFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'direccion';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idDireccion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombreCalle' => ['type' => 'string', 'length' => 25, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'numeroExterno' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'numeroInterior' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'CodigoPostal_idCodigoPostal' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Estado_idEstado' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Direccion_CodigoPostal1_idx' => ['type' => 'index', 'columns' => ['CodigoPostal_idCodigoPostal'], 'length' => []],
            'fk_Direccion_Estado1_idx' => ['type' => 'index', 'columns' => ['Estado_idEstado'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idDireccion'], 'length' => []],
            'fk_Direccion_CodigoPostal1' => ['type' => 'foreign', 'columns' => ['CodigoPostal_idCodigoPostal'], 'references' => ['codigopostal', 'idCodigoPostal'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Direccion_Estado1' => ['type' => 'foreign', 'columns' => ['Estado_idEstado'], 'references' => ['estado', 'idEstado'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idDireccion' => 1,
            'nombreCalle' => 'Lorem ipsum dolor sit a',
            'numeroExterno' => 1,
            'numeroInterior' => 1,
            'CodigoPostal_idCodigoPostal' => 1,
            'Estado_idEstado' => 1
        ],
    ];
}

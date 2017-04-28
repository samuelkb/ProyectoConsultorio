<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RazonsocialFixture
 *
 */
class RazonsocialFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'razonsocial';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idRazonSocial' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombreRazon' => ['type' => 'string', 'length' => 25, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcion' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Direccion_idDireccion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_RazonSocial_Direccion1_idx' => ['type' => 'index', 'columns' => ['Direccion_idDireccion'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idRazonSocial'], 'length' => []],
            'fk_RazonSocial_Direccion1' => ['type' => 'foreign', 'columns' => ['Direccion_idDireccion'], 'references' => ['direccion', 'idDireccion'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idRazonSocial' => 1,
            'nombreRazon' => 'Lorem ipsum dolor sit a',
            'descripcion' => 'Lorem ipsum dolor sit amet',
            'Direccion_idDireccion' => 1
        ],
    ];
}

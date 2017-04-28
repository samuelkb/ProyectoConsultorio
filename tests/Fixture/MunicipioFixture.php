<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MunicipioFixture
 *
 */
class MunicipioFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'municipio';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idMunicipio' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombreMunicipio' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Estado_idEstado' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Municipio_Estado1_idx' => ['type' => 'index', 'columns' => ['Estado_idEstado'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idMunicipio'], 'length' => []],
            'fk_Municipio_Estado1' => ['type' => 'foreign', 'columns' => ['Estado_idEstado'], 'references' => ['estado', 'idEstado'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idMunicipio' => 1,
            'nombreMunicipio' => 'Lorem ipsum dolor sit amet',
            'Estado_idEstado' => 1
        ],
    ];
}

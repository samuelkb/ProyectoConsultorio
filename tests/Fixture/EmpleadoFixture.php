<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpleadoFixture
 *
 */
class EmpleadoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'empleado';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idempleado' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Puesto' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Salario' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'ConsultorioDental_idConsultorioDental' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Usuario_idUsuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_empleado_ConsultorioDental1_idx' => ['type' => 'index', 'columns' => ['ConsultorioDental_idConsultorioDental'], 'length' => []],
            'fk_empleado_Usuario1_idx' => ['type' => 'index', 'columns' => ['Usuario_idUsuario'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idempleado', 'ConsultorioDental_idConsultorioDental'], 'length' => []],
            'fk_empleado_ConsultorioDental1' => ['type' => 'foreign', 'columns' => ['ConsultorioDental_idConsultorioDental'], 'references' => ['consultoriodental', 'idConsultorioDental'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_empleado_Usuario1' => ['type' => 'foreign', 'columns' => ['Usuario_idUsuario'], 'references' => ['usuario', 'idUsuario'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idempleado' => 1,
            'Puesto' => 'Lorem ipsum d',
            'Salario' => 1,
            'ConsultorioDental_idConsultorioDental' => 1,
            'Usuario_idUsuario' => 1
        ],
    ];
}

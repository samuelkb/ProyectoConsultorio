<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PacienteFixture
 *
 */
class PacienteFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'paciente';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idPaciente' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'numeroDePaciente' => ['type' => 'text', 'length' => 16777215, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'anotaciones' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descuento' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ConsultorioDental_idConsultorioDental' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Usuario_idUsuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Paciente_ConsultorioDental1_idx' => ['type' => 'index', 'columns' => ['ConsultorioDental_idConsultorioDental'], 'length' => []],
            'fk_Paciente_Usuario1_idx' => ['type' => 'index', 'columns' => ['Usuario_idUsuario'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idPaciente', 'ConsultorioDental_idConsultorioDental'], 'length' => []],
            'fk_Paciente_ConsultorioDental1' => ['type' => 'foreign', 'columns' => ['ConsultorioDental_idConsultorioDental'], 'references' => ['consultoriodental', 'idConsultorioDental'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Paciente_Usuario1' => ['type' => 'foreign', 'columns' => ['Usuario_idUsuario'], 'references' => ['usuario', 'idUsuario'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idPaciente' => 1,
            'numeroDePaciente' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'anotaciones' => 'Lorem ipsum dolor sit amet',
            'descuento' => 1,
            'ConsultorioDental_idConsultorioDental' => 1,
            'Usuario_idUsuario' => 1
        ],
    ];
}

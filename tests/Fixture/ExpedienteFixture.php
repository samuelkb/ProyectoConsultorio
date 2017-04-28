<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExpedienteFixture
 *
 */
class ExpedienteFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'expediente';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idExpediente' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Paciente_idPaciente' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Expediente_Paciente1_idx' => ['type' => 'index', 'columns' => ['Paciente_idPaciente'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idExpediente'], 'length' => []],
            'fk_Expediente_Paciente1' => ['type' => 'foreign', 'columns' => ['Paciente_idPaciente'], 'references' => ['paciente', 'idPaciente'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idExpediente' => 1,
            'Paciente_idPaciente' => 1
        ],
    ];
}

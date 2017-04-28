<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CitaFixture
 *
 */
class CitaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cita';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idCita' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'horaInicio' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'horaTermino' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'observaciones' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Paciente_idPaciente' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'empleado_idempleado' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'empleado_ConsultorioDental_idConsultorioDental' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'CatalogoServicios_idCatalogoServicios' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Pago_idPago' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Expediente_idExpediente' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Cita_Paciente1_idx' => ['type' => 'index', 'columns' => ['Paciente_idPaciente'], 'length' => []],
            'fk_Cita_empleado1_idx' => ['type' => 'index', 'columns' => ['empleado_idempleado', 'empleado_ConsultorioDental_idConsultorioDental'], 'length' => []],
            'fk_Cita_CatalogoServicios1_idx' => ['type' => 'index', 'columns' => ['CatalogoServicios_idCatalogoServicios'], 'length' => []],
            'fk_Cita_Pago1_idx' => ['type' => 'index', 'columns' => ['Pago_idPago'], 'length' => []],
            'fk_Cita_Expediente1_idx' => ['type' => 'index', 'columns' => ['Expediente_idExpediente'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idCita'], 'length' => []],
            'fk_Cita_CatalogoServicios1' => ['type' => 'foreign', 'columns' => ['CatalogoServicios_idCatalogoServicios'], 'references' => ['catalogoservicios', 'idCatalogoServicios'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Cita_Expediente1' => ['type' => 'foreign', 'columns' => ['Expediente_idExpediente'], 'references' => ['expediente', 'idExpediente'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Cita_Paciente1' => ['type' => 'foreign', 'columns' => ['Paciente_idPaciente'], 'references' => ['paciente', 'idPaciente'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Cita_Pago1' => ['type' => 'foreign', 'columns' => ['Pago_idPago'], 'references' => ['pago', 'idPago'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Cita_empleado1' => ['type' => 'foreign', 'columns' => ['empleado_idempleado', 'empleado_ConsultorioDental_idConsultorioDental'], 'references' => ['empleado', '1' => ['idempleado', 'ConsultorioDental_idConsultorioDental']], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idCita' => 1,
            'horaInicio' => '2017-04-27 19:29:19',
            'horaTermino' => '2017-04-27 19:29:19',
            'observaciones' => 'Lorem ipsum dolor sit amet',
            'Paciente_idPaciente' => 1,
            'empleado_idempleado' => 1,
            'empleado_ConsultorioDental_idConsultorioDental' => 1,
            'CatalogoServicios_idCatalogoServicios' => 1,
            'Pago_idPago' => 1,
            'Expediente_idExpediente' => 1
        ],
    ];
}

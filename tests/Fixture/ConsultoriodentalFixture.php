<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ConsultoriodentalFixture
 *
 */
class ConsultoriodentalFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'consultoriodental';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idConsultorioDental' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombreConsultorio' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Direccion_idDireccion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Contacto_idContacto' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_ConsultorioDental_Direccion1_idx' => ['type' => 'index', 'columns' => ['Direccion_idDireccion'], 'length' => []],
            'fk_ConsultorioDental_Contacto1_idx' => ['type' => 'index', 'columns' => ['Contacto_idContacto'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idConsultorioDental'], 'length' => []],
            'fk_ConsultorioDental_Contacto1' => ['type' => 'foreign', 'columns' => ['Contacto_idContacto'], 'references' => ['contacto', 'idContacto'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_ConsultorioDental_Direccion1' => ['type' => 'foreign', 'columns' => ['Direccion_idDireccion'], 'references' => ['direccion', 'idDireccion'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idConsultorioDental' => 1,
            'nombreConsultorio' => 'Lorem ipsum dolor sit amet',
            'Direccion_idDireccion' => 1,
            'Contacto_idContacto' => 1
        ],
    ];
}

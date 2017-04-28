<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuarioFixture
 *
 */
class UsuarioFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'usuario';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idUsuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombreUsuario' => ['type' => 'string', 'length' => 25, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellidoPaterno' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellidoMaterno' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Direccion_idDireccion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Contacto_idContacto' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Usuario_Direccion1_idx' => ['type' => 'index', 'columns' => ['Direccion_idDireccion'], 'length' => []],
            'fk_Usuario_Contacto1_idx' => ['type' => 'index', 'columns' => ['Contacto_idContacto'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idUsuario'], 'length' => []],
            'fk_Usuario_Contacto1' => ['type' => 'foreign', 'columns' => ['Contacto_idContacto'], 'references' => ['contacto', 'idContacto'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Usuario_Direccion1' => ['type' => 'foreign', 'columns' => ['Direccion_idDireccion'], 'references' => ['direccion', 'idDireccion'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idUsuario' => 1,
            'nombreUsuario' => 'Lorem ipsum dolor sit a',
            'apellidoPaterno' => 'Lorem ipsum d',
            'apellidoMaterno' => 'Lorem ipsum d',
            'password' => 'Lorem ipsum d',
            'Direccion_idDireccion' => 1,
            'Contacto_idContacto' => 1
        ],
    ];
}

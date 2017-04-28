<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InventarioFixture
 *
 */
class InventarioFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'inventario';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idInventario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombreItem' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcionItem' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'stock' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fechaDeCaducidad' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'Categoria_idCategoria' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ConsultorioDental_idConsultorioDental' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Inventario_Categoria1_idx' => ['type' => 'index', 'columns' => ['Categoria_idCategoria'], 'length' => []],
            'fk_Inventario_ConsultorioDental1_idx' => ['type' => 'index', 'columns' => ['ConsultorioDental_idConsultorioDental'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idInventario'], 'length' => []],
            'fk_Inventario_Categoria1' => ['type' => 'foreign', 'columns' => ['Categoria_idCategoria'], 'references' => ['categoria', 'idCategoria'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Inventario_ConsultorioDental1' => ['type' => 'foreign', 'columns' => ['ConsultorioDental_idConsultorioDental'], 'references' => ['consultoriodental', 'idConsultorioDental'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idInventario' => 1,
            'nombreItem' => 'Lorem ipsum dolor sit amet',
            'descripcionItem' => 'Lorem ipsum dolor sit amet',
            'stock' => 1,
            'fechaDeCaducidad' => '2017-04-27',
            'Categoria_idCategoria' => 1,
            'ConsultorioDental_idConsultorioDental' => 1
        ],
    ];
}

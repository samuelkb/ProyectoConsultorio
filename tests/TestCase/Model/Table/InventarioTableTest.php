<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InventarioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InventarioTable Test Case
 */
class InventarioTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InventarioTable
     */
    public $Inventario;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.inventario'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Inventario') ? [] : ['className' => 'App\Model\Table\InventarioTable'];
        $this->Inventario = TableRegistry::get('Inventario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Inventario);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

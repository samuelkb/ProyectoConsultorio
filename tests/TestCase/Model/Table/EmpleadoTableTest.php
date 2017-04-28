<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpleadoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpleadoTable Test Case
 */
class EmpleadoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpleadoTable
     */
    public $Empleado;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.empleado'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Empleado') ? [] : ['className' => 'App\Model\Table\EmpleadoTable'];
        $this->Empleado = TableRegistry::get('Empleado', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Empleado);

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

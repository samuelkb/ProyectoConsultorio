<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoasentamientoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoasentamientoTable Test Case
 */
class TipoasentamientoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoasentamientoTable
     */
    public $Tipoasentamiento;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipoasentamiento'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tipoasentamiento') ? [] : ['className' => 'App\Model\Table\TipoasentamientoTable'];
        $this->Tipoasentamiento = TableRegistry::get('Tipoasentamiento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tipoasentamiento);

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

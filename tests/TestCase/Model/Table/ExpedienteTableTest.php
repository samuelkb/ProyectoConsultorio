<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExpedienteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExpedienteTable Test Case
 */
class ExpedienteTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExpedienteTable
     */
    public $Expediente;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.expediente'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Expediente') ? [] : ['className' => 'App\Model\Table\ExpedienteTable'];
        $this->Expediente = TableRegistry::get('Expediente', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Expediente);

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

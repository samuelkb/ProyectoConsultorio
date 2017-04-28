<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CitaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CitaTable Test Case
 */
class CitaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CitaTable
     */
    public $Cita;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cita'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cita') ? [] : ['className' => 'App\Model\Table\CitaTable'];
        $this->Cita = TableRegistry::get('Cita', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cita);

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

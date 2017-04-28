<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BitacoraTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BitacoraTable Test Case
 */
class BitacoraTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BitacoraTable
     */
    public $Bitacora;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bitacora'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Bitacora') ? [] : ['className' => 'App\Model\Table\BitacoraTable'];
        $this->Bitacora = TableRegistry::get('Bitacora', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bitacora);

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

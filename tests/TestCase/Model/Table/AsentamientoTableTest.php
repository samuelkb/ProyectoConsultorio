<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AsentamientoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AsentamientoTable Test Case
 */
class AsentamientoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AsentamientoTable
     */
    public $Asentamiento;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.asentamiento'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Asentamiento') ? [] : ['className' => 'App\Model\Table\AsentamientoTable'];
        $this->Asentamiento = TableRegistry::get('Asentamiento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Asentamiento);

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

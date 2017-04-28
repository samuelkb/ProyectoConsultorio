<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DireccionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DireccionTable Test Case
 */
class DireccionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DireccionTable
     */
    public $Direccion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.direccion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Direccion') ? [] : ['className' => 'App\Model\Table\DireccionTable'];
        $this->Direccion = TableRegistry::get('Direccion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Direccion);

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

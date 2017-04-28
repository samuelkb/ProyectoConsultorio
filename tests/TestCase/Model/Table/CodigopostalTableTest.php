<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CodigopostalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CodigopostalTable Test Case
 */
class CodigopostalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CodigopostalTable
     */
    public $Codigopostal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.codigopostal'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Codigopostal') ? [] : ['className' => 'App\Model\Table\CodigopostalTable'];
        $this->Codigopostal = TableRegistry::get('Codigopostal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Codigopostal);

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

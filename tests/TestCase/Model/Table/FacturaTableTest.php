<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FacturaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FacturaTable Test Case
 */
class FacturaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FacturaTable
     */
    public $Factura;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.factura'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Factura') ? [] : ['className' => 'App\Model\Table\FacturaTable'];
        $this->Factura = TableRegistry::get('Factura', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Factura);

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

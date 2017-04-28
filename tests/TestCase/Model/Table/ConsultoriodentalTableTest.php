<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultoriodentalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultoriodentalTable Test Case
 */
class ConsultoriodentalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultoriodentalTable
     */
    public $Consultoriodental;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.consultoriodental'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Consultoriodental') ? [] : ['className' => 'App\Model\Table\ConsultoriodentalTable'];
        $this->Consultoriodental = TableRegistry::get('Consultoriodental', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Consultoriodental);

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

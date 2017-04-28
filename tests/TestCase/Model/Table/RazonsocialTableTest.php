<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RazonsocialTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RazonsocialTable Test Case
 */
class RazonsocialTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RazonsocialTable
     */
    public $Razonsocial;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.razonsocial'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Razonsocial') ? [] : ['className' => 'App\Model\Table\RazonsocialTable'];
        $this->Razonsocial = TableRegistry::get('Razonsocial', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Razonsocial);

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

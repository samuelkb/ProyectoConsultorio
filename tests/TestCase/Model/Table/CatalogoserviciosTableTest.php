<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatalogoserviciosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatalogoserviciosTable Test Case
 */
class CatalogoserviciosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CatalogoserviciosTable
     */
    public $Catalogoservicios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.catalogoservicios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Catalogoservicios') ? [] : ['className' => 'App\Model\Table\CatalogoserviciosTable'];
        $this->Catalogoservicios = TableRegistry::get('Catalogoservicios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Catalogoservicios);

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

<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PacienteController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PacienteController Test Case
 */
class PacienteControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.paciente',
        'app.cita',
        'app.empleado',
        'app.consultoriodental',
        'app.inventario',
        'app.categoria',
        'app.consultoriodental',
        'app.direccion',
        'app.codigopostal',
        'app.estado',
        'app.contacto',
        'app.catalogoservicios',
        'app.usuario'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

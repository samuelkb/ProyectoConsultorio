<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Empleado Controller
 *
 * @property \App\Model\Table\EmpleadoTable $Empleado
 */
class EmpleadoController extends AppController
{
    var $paginate = array('limit' => 10, 'order' => array('idEmpleado'));

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $empleado = $this->paginate($this->Empleado);

        $this->set(compact('empleado'));
        $this->set('_serialize', ['empleado']);
    }

    /**
     * View method
     *
     * @param string|null $id Empleado id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empleado = $this->Empleado->get($id, [
            'contain' => []
        ]);

        $this->set('empleado', $empleado);
        $this->set('_serialize', ['empleado']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empleado = $this->Empleado->newEntity();
        if ($this->request->is('post')) {
            $empleado = $this->Empleado->patchEntity($empleado, $this->request->getData());
            if ($this->Empleado->save($empleado)) {
                $this->Flash->success(__('The empleado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empleado could not be saved. Please, try again.'));
        }
        $this->set(compact('empleado'));
        $this->set('_serialize', ['empleado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Empleado id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empleado = $this->Empleado->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empleado = $this->Empleado->patchEntity($empleado, $this->request->getData());
            if ($this->Empleado->save($empleado)) {
                $this->Flash->success(__('The empleado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empleado could not be saved. Please, try again.'));
        }
        $this->set(compact('empleado'));
        $this->set('_serialize', ['empleado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Empleado id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empleado = $this->Empleado->get($id);
        if ($this->Empleado->delete($empleado)) {
            $this->Flash->success(__('The empleado has been deleted.'));
        } else {
            $this->Flash->error(__('The empleado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

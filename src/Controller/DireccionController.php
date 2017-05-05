<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Direccion Controller
 *
 * @property \App\Model\Table\DireccionTable $Direccion
 */
class DireccionController extends AppController
{
    var $paginate = array('limit' => 10, 'order' => array('idDireccion'));

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $direccion = $this->paginate($this->Direccion);

        $this->set(compact('direccion'));
        $this->set('_serialize', ['direccion']);
    }

    /**
     * View method
     *
     * @param string|null $id Direccion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $direccion = $this->Direccion->get($id, [
            'contain' => []
        ]);

        $this->set('direccion', $direccion);
        $this->set('_serialize', ['direccion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $direccion = $this->Direccion->newEntity();
        if ($this->request->is('post')) {
            $direccion = $this->Direccion->patchEntity($direccion, $this->request->getData());
            if ($this->Direccion->save($direccion)) {
                $this->Flash->success(__('The direccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The direccion could not be saved. Please, try again.'));
        }
        $codigopostal = $this->Direccion->Codigopostal->find('all',array('fields'=>'idCodigoPostal'));
        $estado = $this->Direccion->Estado->find('all',array('fields'=>'nombreEstado'));
        $this->set(compact('codigopostal'));
        $this->set(compact('estado'));
        $this->set(compact('direccion'));
        $this->set('_serialize', ['direccion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Direccion id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $direccion = $this->Direccion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $direccion = $this->Direccion->patchEntity($direccion, $this->request->getData());
            if ($this->Direccion->save($direccion)) {
                $this->Flash->success(__('The direccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The direccion could not be saved. Please, try again.'));
        }
        $this->set(compact('direccion'));
        $this->set('_serialize', ['direccion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Direccion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $direccion = $this->Direccion->get($id);
        if ($this->Direccion->delete($direccion)) {
            $this->Flash->success(__('The direccion has been deleted.'));
        } else {
            $this->Flash->error(__('The direccion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

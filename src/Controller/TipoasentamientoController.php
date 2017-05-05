<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipoasentamiento Controller
 *
 * @property \App\Model\Table\TipoasentamientoTable $Tipoasentamiento
 */
class TipoasentamientoController extends AppController
{
    var $paginate = array('limit' => 10, 'order' => array('idTipoasentamiento'));

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tipoasentamiento = $this->paginate($this->Tipoasentamiento);

        $this->set(compact('tipoasentamiento'));
        $this->set('_serialize', ['tipoasentamiento']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipoasentamiento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoasentamiento = $this->Tipoasentamiento->get($id, [
            'contain' => []
        ]);

        $this->set('tipoasentamiento', $tipoasentamiento);
        $this->set('_serialize', ['tipoasentamiento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoasentamiento = $this->Tipoasentamiento->newEntity();
        if ($this->request->is('post')) {
            $tipoasentamiento = $this->Tipoasentamiento->patchEntity($tipoasentamiento, $this->request->getData());
            if ($this->Tipoasentamiento->save($tipoasentamiento)) {
                $this->Flash->success(__('The tipoasentamiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoasentamiento could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoasentamiento'));
        $this->set('_serialize', ['tipoasentamiento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipoasentamiento id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoasentamiento = $this->Tipoasentamiento->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoasentamiento = $this->Tipoasentamiento->patchEntity($tipoasentamiento, $this->request->getData());
            if ($this->Tipoasentamiento->save($tipoasentamiento)) {
                $this->Flash->success(__('The tipoasentamiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoasentamiento could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoasentamiento'));
        $this->set('_serialize', ['tipoasentamiento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipoasentamiento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoasentamiento = $this->Tipoasentamiento->get($id);
        if ($this->Tipoasentamiento->delete($tipoasentamiento)) {
            $this->Flash->success(__('The tipoasentamiento has been deleted.'));
        } else {
            $this->Flash->error(__('The tipoasentamiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

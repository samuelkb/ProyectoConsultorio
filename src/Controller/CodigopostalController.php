<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Codigopostal Controller
 *
 * @property \App\Model\Table\CodigopostalTable $Codigopostal
 */
class CodigopostalController extends AppController
{

    var $paginate = array('limit' => 10, 'order' => array('idCodigopostal'));
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $codigopostal = $this->paginate($this->Codigopostal);

        $this->set(compact('codigopostal'));
        $this->set('_serialize', ['codigopostal']);
    }

    /**
     * View method
     *
     * @param string|null $id Codigopostal id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $codigopostal = $this->Codigopostal->get($id, [
            'contain' => []
        ]);

        $this->set('codigopostal', $codigopostal);
        $this->set('_serialize', ['codigopostal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $codigopostal = $this->Codigopostal->newEntity();
        if ($this->request->is('post')) {
            $codigopostal = $this->Codigopostal->patchEntity($codigopostal, $this->request->getData());
            if ($this->Codigopostal->save($codigopostal)) {
                $this->Flash->success(__('The codigopostal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The codigopostal could not be saved. Please, try again.'));
        }
        $this->set(compact('codigopostal'));
        $this->set('_serialize', ['codigopostal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Codigopostal id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $codigopostal = $this->Codigopostal->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $codigopostal = $this->Codigopostal->patchEntity($codigopostal, $this->request->getData());
            if ($this->Codigopostal->save($codigopostal)) {
                $this->Flash->success(__('The codigopostal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The codigopostal could not be saved. Please, try again.'));
        }
        $this->set(compact('codigopostal'));
        $this->set('_serialize', ['codigopostal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Codigopostal id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $codigopostal = $this->Codigopostal->get($id);
        if ($this->Codigopostal->delete($codigopostal)) {
            $this->Flash->success(__('The codigopostal has been deleted.'));
        } else {
            $this->Flash->error(__('The codigopostal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

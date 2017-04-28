<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Expediente Controller
 *
 * @property \App\Model\Table\ExpedienteTable $Expediente
 */
class ExpedienteController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $expediente = $this->paginate($this->Expediente);

        $this->set(compact('expediente'));
        $this->set('_serialize', ['expediente']);
    }

    /**
     * View method
     *
     * @param string|null $id Expediente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $expediente = $this->Expediente->get($id, [
            'contain' => []
        ]);

        $this->set('expediente', $expediente);
        $this->set('_serialize', ['expediente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $expediente = $this->Expediente->newEntity();
        if ($this->request->is('post')) {
            $expediente = $this->Expediente->patchEntity($expediente, $this->request->getData());
            if ($this->Expediente->save($expediente)) {
                $this->Flash->success(__('The expediente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expediente could not be saved. Please, try again.'));
        }
        $this->set(compact('expediente'));
        $this->set('_serialize', ['expediente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Expediente id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $expediente = $this->Expediente->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $expediente = $this->Expediente->patchEntity($expediente, $this->request->getData());
            if ($this->Expediente->save($expediente)) {
                $this->Flash->success(__('The expediente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expediente could not be saved. Please, try again.'));
        }
        $this->set(compact('expediente'));
        $this->set('_serialize', ['expediente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Expediente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expediente = $this->Expediente->get($id);
        if ($this->Expediente->delete($expediente)) {
            $this->Flash->success(__('The expediente has been deleted.'));
        } else {
            $this->Flash->error(__('The expediente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

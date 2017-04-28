<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Razonsocial Controller
 *
 * @property \App\Model\Table\RazonsocialTable $Razonsocial
 */
class RazonsocialController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $razonsocial = $this->paginate($this->Razonsocial);

        $this->set(compact('razonsocial'));
        $this->set('_serialize', ['razonsocial']);
    }

    /**
     * View method
     *
     * @param string|null $id Razonsocial id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $razonsocial = $this->Razonsocial->get($id, [
            'contain' => []
        ]);

        $this->set('razonsocial', $razonsocial);
        $this->set('_serialize', ['razonsocial']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $razonsocial = $this->Razonsocial->newEntity();
        if ($this->request->is('post')) {
            $razonsocial = $this->Razonsocial->patchEntity($razonsocial, $this->request->getData());
            if ($this->Razonsocial->save($razonsocial)) {
                $this->Flash->success(__('The razonsocial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The razonsocial could not be saved. Please, try again.'));
        }
        $this->set(compact('razonsocial'));
        $this->set('_serialize', ['razonsocial']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Razonsocial id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $razonsocial = $this->Razonsocial->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $razonsocial = $this->Razonsocial->patchEntity($razonsocial, $this->request->getData());
            if ($this->Razonsocial->save($razonsocial)) {
                $this->Flash->success(__('The razonsocial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The razonsocial could not be saved. Please, try again.'));
        }
        $this->set(compact('razonsocial'));
        $this->set('_serialize', ['razonsocial']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Razonsocial id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $razonsocial = $this->Razonsocial->get($id);
        if ($this->Razonsocial->delete($razonsocial)) {
            $this->Flash->success(__('The razonsocial has been deleted.'));
        } else {
            $this->Flash->error(__('The razonsocial could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

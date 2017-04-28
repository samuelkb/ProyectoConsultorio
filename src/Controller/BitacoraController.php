<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bitacora Controller
 *
 * @property \App\Model\Table\BitacoraTable $Bitacora
 */
class BitacoraController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $bitacora = $this->paginate($this->Bitacora);

        $this->set(compact('bitacora'));
        $this->set('_serialize', ['bitacora']);
    }

    /**
     * View method
     *
     * @param string|null $id Bitacora id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bitacora = $this->Bitacora->get($id, [
            'contain' => []
        ]);

        $this->set('bitacora', $bitacora);
        $this->set('_serialize', ['bitacora']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bitacora = $this->Bitacora->newEntity();
        if ($this->request->is('post')) {
            $bitacora = $this->Bitacora->patchEntity($bitacora, $this->request->getData());
            if ($this->Bitacora->save($bitacora)) {
                $this->Flash->success(__('The bitacora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bitacora could not be saved. Please, try again.'));
        }
        $this->set(compact('bitacora'));
        $this->set('_serialize', ['bitacora']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bitacora id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bitacora = $this->Bitacora->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bitacora = $this->Bitacora->patchEntity($bitacora, $this->request->getData());
            if ($this->Bitacora->save($bitacora)) {
                $this->Flash->success(__('The bitacora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bitacora could not be saved. Please, try again.'));
        }
        $this->set(compact('bitacora'));
        $this->set('_serialize', ['bitacora']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bitacora id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bitacora = $this->Bitacora->get($id);
        if ($this->Bitacora->delete($bitacora)) {
            $this->Flash->success(__('The bitacora has been deleted.'));
        } else {
            $this->Flash->error(__('The bitacora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

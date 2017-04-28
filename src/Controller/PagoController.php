<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pago Controller
 *
 * @property \App\Model\Table\PagoTable $Pago
 */
class PagoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $pago = $this->paginate($this->Pago);

        $this->set(compact('pago'));
        $this->set('_serialize', ['pago']);
    }

    /**
     * View method
     *
     * @param string|null $id Pago id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pago = $this->Pago->get($id, [
            'contain' => []
        ]);

        $this->set('pago', $pago);
        $this->set('_serialize', ['pago']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pago = $this->Pago->newEntity();
        if ($this->request->is('post')) {
            $pago = $this->Pago->patchEntity($pago, $this->request->getData());
            if ($this->Pago->save($pago)) {
                $this->Flash->success(__('The pago has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pago could not be saved. Please, try again.'));
        }
        $this->set(compact('pago'));
        $this->set('_serialize', ['pago']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pago id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pago = $this->Pago->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pago = $this->Pago->patchEntity($pago, $this->request->getData());
            if ($this->Pago->save($pago)) {
                $this->Flash->success(__('The pago has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pago could not be saved. Please, try again.'));
        }
        $this->set(compact('pago'));
        $this->set('_serialize', ['pago']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pago id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pago = $this->Pago->get($id);
        if ($this->Pago->delete($pago)) {
            $this->Flash->success(__('The pago has been deleted.'));
        } else {
            $this->Flash->error(__('The pago could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

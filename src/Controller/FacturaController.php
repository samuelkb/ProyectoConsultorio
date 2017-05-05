<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Factura Controller
 *
 * @property \App\Model\Table\FacturaTable $Factura
 */
class FacturaController extends AppController
{
    var $paginate = array('limit' => 10, 'order' => array('idfactura'));

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $factura = $this->paginate($this->Factura);

        $this->set(compact('factura'));
        $this->set('_serialize', ['factura']);
    }

    /**
     * View method
     *
     * @param string|null $id Factura id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $factura = $this->Factura->get($id, [
            'contain' => []
        ]);

        $this->set('factura', $factura);
        $this->set('_serialize', ['factura']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $factura = $this->Factura->newEntity();
        if ($this->request->is('post')) {
            $factura = $this->Factura->patchEntity($factura, $this->request->getData());
            if ($this->Factura->save($factura)) {
                $this->Flash->success(__('The factura has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The factura could not be saved. Please, try again.'));
        }
        $this->set(compact('factura'));
        $this->set('_serialize', ['factura']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Factura id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $factura = $this->Factura->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $factura = $this->Factura->patchEntity($factura, $this->request->getData());
            if ($this->Factura->save($factura)) {
                $this->Flash->success(__('The factura has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The factura could not be saved. Please, try again.'));
        }
        $this->set(compact('factura'));
        $this->set('_serialize', ['factura']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Factura id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $factura = $this->Factura->get($id);
        if ($this->Factura->delete($factura)) {
            $this->Flash->success(__('The factura has been deleted.'));
        } else {
            $this->Flash->error(__('The factura could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

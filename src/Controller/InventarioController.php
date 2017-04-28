<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Inventario Controller
 *
 * @property \App\Model\Table\InventarioTable $Inventario
 */
class InventarioController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $inventario = $this->paginate($this->Inventario);

        $this->set(compact('inventario'));
        $this->set('_serialize', ['inventario']);
    }

    /**
     * View method
     *
     * @param string|null $id Inventario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inventario = $this->Inventario->get($id, [
            'contain' => []
        ]);

        $this->set('inventario', $inventario);
        $this->set('_serialize', ['inventario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inventario = $this->Inventario->newEntity();
        if ($this->request->is('post')) {
            $inventario = $this->Inventario->patchEntity($inventario, $this->request->getData());
            if ($this->Inventario->save($inventario)) {
                $this->Flash->success(__('The inventario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inventario could not be saved. Please, try again.'));
        }
        $categoria = $this->Inventario->Categoria->find('all',array('fields'=>'descripcionCategoria'));
        $consultoriodental = $this->Inventario->Consultoriodental->find('all',array('fields'=>'nombreConsultorio'));
        $this->set(compact('categoria'));
        $this->set(compact('consultoriodental'));
        $this->set(compact('inventario'));
        $this->set('_serialize', ['inventario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Inventario id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inventario = $this->Inventario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inventario = $this->Inventario->patchEntity($inventario, $this->request->getData());
            if ($this->Inventario->save($inventario)) {
                $this->Flash->success(__('The inventario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inventario could not be saved. Please, try again.'));
        }
        $this->set(compact('inventario'));
        $this->set('_serialize', ['inventario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inventario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inventario = $this->Inventario->get($id);
        if ($this->Inventario->delete($inventario)) {
            $this->Flash->success(__('The inventario has been deleted.'));
        } else {
            $this->Flash->error(__('The inventario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

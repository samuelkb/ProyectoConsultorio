<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categoria Controller
 *
 * @property \App\Model\Table\CategoriaTable $Categoria
 */
class CategoriaController extends AppController
{

    var $paginate = array('limit' => 10, 'order' => array('idCategoria'));
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $categoria = $this->paginate($this->Categoria);

        $this->set(compact('categoria'));
        $this->set('_serialize', ['categoria']);
    }

    /**
     * View method
     *
     * @param string|null $id Categorium id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categorium = $this->Categoria->get($id, [
            'contain' => []
        ]);

        $this->set('categorium', $categorium);
        $this->set('_serialize', ['categorium']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categorium = $this->Categoria->newEntity();
        if ($this->request->is('post')) {
            $categorium = $this->Categoria->patchEntity($categorium, $this->request->getData());
            if ($this->Categoria->save($categorium)) {
                $this->Flash->success(__('The categorium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorium could not be saved. Please, try again.'));
        }
        $this->set(compact('categorium'));
        $this->set('_serialize', ['categorium']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorium id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categorium = $this->Categoria->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categorium = $this->Categoria->patchEntity($categorium, $this->request->getData());
            if ($this->Categoria->save($categorium)) {
                $this->Flash->success(__('The categorium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorium could not be saved. Please, try again.'));
        }
        $this->set(compact('categorium'));
        $this->set('_serialize', ['categorium']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorium id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categorium = $this->Categoria->get($id);
        if ($this->Categoria->delete($categorium)) {
            $this->Flash->success(__('The categorium has been deleted.'));
        } else {
            $this->Flash->error(__('The categorium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

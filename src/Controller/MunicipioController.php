<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Municipio Controller
 *
 * @property \App\Model\Table\MunicipioTable $Municipio
 */
class MunicipioController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $municipio = $this->paginate($this->Municipio);

        $this->set(compact('municipio'));
        $this->set('_serialize', ['municipio']);
    }

    /**
     * View method
     *
     * @param string|null $id Municipio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $municipio = $this->Municipio->get($id, [
            'contain' => []
        ]);

        $this->set('municipio', $municipio);
        $this->set('_serialize', ['municipio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $municipio = $this->Municipio->newEntity();
        if ($this->request->is('post')) {
            $municipio = $this->Municipio->patchEntity($municipio, $this->request->getData());
            if ($this->Municipio->save($municipio)) {
                $this->Flash->success(__('The municipio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The municipio could not be saved. Please, try again.'));
        }
        $this->set(compact('municipio'));
        $this->set('_serialize', ['municipio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Municipio id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $municipio = $this->Municipio->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $municipio = $this->Municipio->patchEntity($municipio, $this->request->getData());
            if ($this->Municipio->save($municipio)) {
                $this->Flash->success(__('The municipio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The municipio could not be saved. Please, try again.'));
        }
        $this->set(compact('municipio'));
        $this->set('_serialize', ['municipio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Municipio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $municipio = $this->Municipio->get($id);
        if ($this->Municipio->delete($municipio)) {
            $this->Flash->success(__('The municipio has been deleted.'));
        } else {
            $this->Flash->error(__('The municipio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contacto Controller
 *
 * @property \App\Model\Table\ContactoTable $Contacto
 */
class ContactoController extends AppController
{
    var $paginate = array('limit' => 10, 'order' => array('idContacto'));

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $contacto = $this->paginate($this->Contacto);

        $this->set(compact('contacto'));
        $this->set('_serialize', ['contacto']);
    }

    /**
     * View method
     *
     * @param string|null $id Contacto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contacto = $this->Contacto->get($id, [
            'contain' => []
        ]);

        $this->set('contacto', $contacto);
        $this->set('_serialize', ['contacto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contacto = $this->Contacto->newEntity();
        if ($this->request->is('post')) {
            $contacto = $this->Contacto->patchEntity($contacto, $this->request->getData());
            if ($this->Contacto->save($contacto)) {
                $this->Flash->success(__('The contacto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contacto could not be saved. Please, try again.'));
        }
        $this->set(compact('contacto'));
        $this->set('_serialize', ['contacto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contacto id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contacto = $this->Contacto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contacto = $this->Contacto->patchEntity($contacto, $this->request->getData());
            if ($this->Contacto->save($contacto)) {
                $this->Flash->success(__('The contacto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contacto could not be saved. Please, try again.'));
        }
        $this->set(compact('contacto'));
        $this->set('_serialize', ['contacto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contacto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contacto = $this->Contacto->get($id);
        if ($this->Contacto->delete($contacto)) {
            $this->Flash->success(__('The contacto has been deleted.'));
        } else {
            $this->Flash->error(__('The contacto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

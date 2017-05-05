<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consultoriodental Controller
 *
 * @property \App\Model\Table\ConsultoriodentalTable $Consultoriodental
 */
class ConsultoriodentalController extends AppController
{

    var $paginate = array('limit' => 10, 'order' => array('idConsultoriodental'));
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $consultoriodental = $this->paginate($this->Consultoriodental);

        $this->set(compact('consultoriodental'));
        $this->set('_serialize', ['consultoriodental']);
    }

    /**
     * View method
     *
     * @param string|null $id Consultoriodental id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultoriodental = $this->Consultoriodental->get($id, [
            'contain' => []
        ]);
        //$this->set()

        $this->set('consultoriodental', $consultoriodental);
        $this->set('_serialize', ['consultoriodental']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultoriodental = $this->Consultoriodental->newEntity();
        if ($this->request->is('post')) {
            $consultoriodental = $this->Consultoriodental->patchEntity($consultoriodental, $this->request->getData());
            if ($this->Consultoriodental->save($consultoriodental)) {
                $this->Flash->success(__('The consultoriodental has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultoriodental could not be saved. Please, try again.'));
        }
        $contacto = $this->Consultoriodental->Contacto->find('all', array('fields' => array('telefono', 'celular', 'correoElectronico')));
        $direccion = $this->Consultoriodental->Direccion->find('all', array('fields' => array('nombreCalle', 'numeroExterno', 'CodigoPostal_idCodigoPostal')));
        $this->set(compact('contacto'));
        $this->set(compact('direccion'));
        $this->set(compact('consultoriodental'));
        $this->set('_serialize', ['consultoriodental']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultoriodental id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultoriodental = $this->Consultoriodental->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultoriodental = $this->Consultoriodental->patchEntity($consultoriodental, $this->request->getData());
            if ($this->Consultoriodental->save($consultoriodental)) {
                $this->Flash->success(__('The consultoriodental has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultoriodental could not be saved. Please, try again.'));
        }
        $contacto = $this->Consultoriodental->Contacto->find('all', array('fields' => array('telefono', 'celular', 'correoElectronico')));
        $direccion = $this->Consultoriodental->Direccion->find('all', array('fields' => array('nombreCalle', 'numeroExterno', 'CodigoPostal_idCodigoPostal')));
        $this->set(compact('contacto'));
        $this->set(compact('direccion'));
        $this->set(compact('consultoriodental'));
        $this->set('_serialize', ['consultoriodental']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultoriodental id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultoriodental = $this->Consultoriodental->get($id);
        if ($this->Consultoriodental->delete($consultoriodental)) {
            $this->Flash->success(__('The consultoriodental has been deleted.'));
        } else {
            $this->Flash->error(__('The consultoriodental could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Asentamiento Controller
 *
 * @property \App\Model\Table\AsentamientoTable $Asentamiento
 */
class AsentamientoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $asentamiento = $this->paginate($this->Asentamiento);

        $this->set(compact('asentamiento'));
        $this->set('_serialize', ['asentamiento']);
    }

    /**
     * View method
     *
     * @param string|null $id Asentamiento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $asentamiento = $this->Asentamiento->get($id, [
            'contain' => []
        ]);

        $this->set('asentamiento', $asentamiento);
        $this->set('_serialize', ['asentamiento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $asentamiento = $this->Asentamiento->newEntity();
        if ($this->request->is('post')) {
            $asentamiento = $this->Asentamiento->patchEntity($asentamiento, $this->request->getData());
            if ($this->Asentamiento->save($asentamiento)) {
                $this->Flash->success(__('The asentamiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asentamiento could not be saved. Please, try again.'));
        }
        $this->set(compact('asentamiento'));
        $this->set('_serialize', ['asentamiento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Asentamiento id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $asentamiento = $this->Asentamiento->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $asentamiento = $this->Asentamiento->patchEntity($asentamiento, $this->request->getData());
            if ($this->Asentamiento->save($asentamiento)) {
                $this->Flash->success(__('The asentamiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asentamiento could not be saved. Please, try again.'));
        }
        $this->set(compact('asentamiento'));
        $this->set('_serialize', ['asentamiento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Asentamiento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $asentamiento = $this->Asentamiento->get($id);
        if ($this->Asentamiento->delete($asentamiento)) {
            $this->Flash->success(__('The asentamiento has been deleted.'));
        } else {
            $this->Flash->error(__('The asentamiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function search()
    {
        //Busqueda que solo trae el nombre de la casilla devolutivos
        $asentamiento = $this->Asentamiento->find('all',array('conditions' => array('Asentamiento.nombreAsentamiento')));
        if ($this->request->is('post'))
        {
            if ($asentamiento)
            {
                $this->Flash->success('Busqueda efectiva, elemento encontrado');
            }
            else
            {
                $this->Flash->error('No existe el asentamiento');
            }
        }
        $this->set('asentamiento',$asentamiento);
    }
}

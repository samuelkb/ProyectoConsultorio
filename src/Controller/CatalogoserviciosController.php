<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Catalogoservicios Controller
 *
 * @property \App\Model\Table\CatalogoserviciosTable $Catalogoservicios
 */
class CatalogoserviciosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $catalogoservicios = $this->paginate($this->Catalogoservicios);

        $this->set(compact('catalogoservicios'));
        $this->set('_serialize', ['catalogoservicios']);
    }

    /**
     * View method
     *
     * @param string|null $id Catalogoservicio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catalogoservicio = $this->Catalogoservicios->get($id, [
            'contain' => []
        ]);

        $this->set('catalogoservicio', $catalogoservicio);
        $this->set('_serialize', ['catalogoservicio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catalogoservicio = $this->Catalogoservicios->newEntity();
        if ($this->request->is('post')) {
            $catalogoservicio = $this->Catalogoservicios->patchEntity($catalogoservicio, $this->request->getData());
            if ($this->Catalogoservicios->save($catalogoservicio)) {
                $this->Flash->success(__('The catalogoservicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The catalogoservicio could not be saved. Please, try again.'));
        }
        $this->set(compact('catalogoservicio'));
        $this->set('_serialize', ['catalogoservicio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Catalogoservicio id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catalogoservicio = $this->Catalogoservicios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catalogoservicio = $this->Catalogoservicios->patchEntity($catalogoservicio, $this->request->getData());
            if ($this->Catalogoservicios->save($catalogoservicio)) {
                $this->Flash->success(__('The catalogoservicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The catalogoservicio could not be saved. Please, try again.'));
        }
        $this->set(compact('catalogoservicio'));
        $this->set('_serialize', ['catalogoservicio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Catalogoservicio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catalogoservicio = $this->Catalogoservicios->get($id);
        if ($this->Catalogoservicios->delete($catalogoservicio)) {
            $this->Flash->success(__('The catalogoservicio has been deleted.'));
        } else {
            $this->Flash->error(__('The catalogoservicio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

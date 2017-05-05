<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cita Controller
 *
 * @property \App\Model\Table\CitaTable $Cita
 */
class CitaController extends AppController
{

    var $paginate = array('limit' => 10, 'order' => array('idCita'));
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cita = $this->paginate($this->Cita);

        $this->set(compact('cita'));
        $this->set('_serialize', ['cita']);
    }

    /**
     * View method
     *
     * @param string|null $id Citum id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $citum = $this->Cita->get($id, [
            'contain' => []
        ]);

        $this->set('citum', $citum);
        $this->set('_serialize', ['citum']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $citum = $this->Cita->newEntity();
        if ($this->request->is('post')) {
            $citum = $this->Cita->patchEntity($citum, $this->request->getData());
            if ($this->Cita->save($citum)) {
                $this->Flash->success(__('The citum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The citum could not be saved. Please, try again.'));
        }
        $paciente = $this->Cita->Paciente->find('all', array('fields' => array('numeroDePaciente','anotaciones', 'descuento', 'Usuario_idUsuario')));
        $empleado = $this->Cita->Empleado->find('all', array('fields' => array('Puesto','Salario', 'Usuario_idUsuario')));
        $consultoriodental = $this->Cita->Consultoriodental->find('all', array('fields' => array('nombreConsultorio')));
        $catalogoservicios = $this->Cita->Catalogoservicios->find('all', array('fields' => array('descripcionServicio','costoServicio', 'Especificaciones')));
        $this->set(compact('paciente'));
        $this->set(compact('empleado'));
        $this->set(compact('consultoriodental'));
        $this->set(compact('catalogoservicios'));
        $this->set(compact('citum'));
        $this->set('_serialize', ['citum']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Citum id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $citum = $this->Cita->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $citum = $this->Cita->patchEntity($citum, $this->request->getData());
            if ($this->Cita->save($citum)) {
                $this->Flash->success(__('The citum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The citum could not be saved. Please, try again.'));
        }
        $this->set(compact('citum'));
        $this->set('_serialize', ['citum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Citum id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $citum = $this->Cita->get($id);
        if ($this->Cita->delete($citum)) {
            $this->Flash->success(__('The citum has been deleted.'));
        } else {
            $this->Flash->error(__('The citum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

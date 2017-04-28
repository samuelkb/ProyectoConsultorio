<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cita Model
 *
 * @method \App\Model\Entity\Citum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Citum newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Citum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Citum|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Citum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Citum[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Citum findOrCreate($search, callable $callback = null, $options = [])
 */
class CitaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('cita');
        $this->setDisplayField('idCita');
        $this->setPrimaryKey('idCita');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('idCita')
            ->allowEmpty('idCita', 'create');

        $validator
            ->dateTime('horaInicio')
            ->requirePresence('horaInicio', 'create')
            ->notEmpty('horaInicio');

        $validator
            ->dateTime('horaTermino')
            ->requirePresence('horaTermino', 'create')
            ->notEmpty('horaTermino');

        $validator
            ->allowEmpty('observaciones');

        $validator
            ->integer('Paciente_idPaciente')
            ->requirePresence('Paciente_idPaciente', 'create')
            ->notEmpty('Paciente_idPaciente');

        $validator
            ->integer('empleado_idempleado')
            ->requirePresence('empleado_idempleado', 'create')
            ->notEmpty('empleado_idempleado');

        $validator
            ->integer('empleado_ConsultorioDental_idConsultorioDental')
            ->requirePresence('empleado_ConsultorioDental_idConsultorioDental', 'create')
            ->notEmpty('empleado_ConsultorioDental_idConsultorioDental');

        $validator
            ->integer('CatalogoServicios_idCatalogoServicios')
            ->requirePresence('CatalogoServicios_idCatalogoServicios', 'create')
            ->notEmpty('CatalogoServicios_idCatalogoServicios');

        $validator
            ->integer('Pago_idPago')
            ->requirePresence('Pago_idPago', 'create')
            ->notEmpty('Pago_idPago');

        $validator
            ->integer('Expediente_idExpediente')
            ->requirePresence('Expediente_idExpediente', 'create')
            ->notEmpty('Expediente_idExpediente');

        return $validator;
    }
}

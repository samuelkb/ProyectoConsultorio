<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Expediente Model
 *
 * @method \App\Model\Entity\Expediente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Expediente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Expediente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Expediente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Expediente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Expediente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Expediente findOrCreate($search, callable $callback = null, $options = [])
 */
class ExpedienteTable extends Table
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

        $this->setTable('expediente');
        $this->setDisplayField('idExpediente');
        $this->setPrimaryKey('idExpediente');
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
            ->integer('idExpediente')
            ->allowEmpty('idExpediente', 'create');

        $validator
            ->integer('Paciente_idPaciente')
            ->requirePresence('Paciente_idPaciente', 'create')
            ->notEmpty('Paciente_idPaciente');

        return $validator;
    }
}

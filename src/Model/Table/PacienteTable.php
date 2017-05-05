<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paciente Model
 *
 * @method \App\Model\Entity\Paciente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Paciente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Paciente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paciente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paciente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Paciente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paciente findOrCreate($search, callable $callback = null, $options = [])
 */
class PacienteTable extends Table
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

        $this->setTable('paciente');
        $this->setDisplayField('idPaciente');
        $this->setPrimaryKey(['idPaciente', 'ConsultorioDental_idConsultorioDental']);

        $this->hasMany('Cita',['foreignKey'=>'idCita','joinType'=>'INNER']);
        $this->belongsTo('Usuario', ['foreignKey' => 'Usuario_idUsuario', 'joinType' => 'INNER']);
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
            ->integer('idPaciente')
            ->allowEmpty('idPaciente', 'create');

        $validator
            ->requirePresence('numeroDePaciente', 'create')
            ->notEmpty('numeroDePaciente');

        $validator
            ->allowEmpty('anotaciones');

        $validator
            ->integer('descuento')
            ->allowEmpty('descuento');

        $validator
            ->integer('ConsultorioDental_idConsultorioDental')
            ->allowEmpty('ConsultorioDental_idConsultorioDental', 'create');

        $validator
            ->integer('Usuario_idUsuario')
            ->requirePresence('Usuario_idUsuario', 'create')
            ->notEmpty('Usuario_idUsuario');

        return $validator;
    }
}

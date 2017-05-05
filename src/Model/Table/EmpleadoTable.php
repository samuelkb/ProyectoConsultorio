<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empleado Model
 *
 * @method \App\Model\Entity\Empleado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empleado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Empleado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empleado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empleado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empleado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empleado findOrCreate($search, callable $callback = null, $options = [])
 */
class EmpleadoTable extends Table
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

        $this->setTable('empleado');
        $this->setDisplayField('idempleado');
        $this->setPrimaryKey(['idempleado', 'ConsultorioDental_idConsultorioDental']);

        $this->hasMany('Cita',['foreignKey'=>'idCita','joinType'=>'INNER']);
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
            ->integer('idempleado')
            ->allowEmpty('idempleado', 'create');

        $validator
            ->requirePresence('Puesto', 'create')
            ->notEmpty('Puesto');

        $validator
            ->numeric('Salario')
            ->allowEmpty('Salario');

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

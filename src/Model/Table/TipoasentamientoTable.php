<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipoasentamiento Model
 *
 * @method \App\Model\Entity\Tipoasentamiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipoasentamiento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tipoasentamiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipoasentamiento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipoasentamiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoasentamiento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipoasentamiento findOrCreate($search, callable $callback = null, $options = [])
 */
class TipoasentamientoTable extends Table
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

        $this->setTable('tipoasentamiento');
        $this->setDisplayField('idTipoAsentamiento');
        $this->setPrimaryKey('idTipoAsentamiento');

        $this->hasMany('Asentamiento',['foreignKey' =>'idTipoAsentamiento']);
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
            ->integer('idTipoAsentamiento')
            ->allowEmpty('idTipoAsentamiento', 'create');

        $validator
            ->requirePresence('descripciónAsentamiento', 'create')
            ->notEmpty('descripciónAsentamiento');

        return $validator;
    }
}

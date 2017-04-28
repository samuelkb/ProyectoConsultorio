<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Razonsocial Model
 *
 * @method \App\Model\Entity\Razonsocial get($primaryKey, $options = [])
 * @method \App\Model\Entity\Razonsocial newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Razonsocial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Razonsocial|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Razonsocial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Razonsocial[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Razonsocial findOrCreate($search, callable $callback = null, $options = [])
 */
class RazonsocialTable extends Table
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

        $this->setTable('razonsocial');
        $this->setDisplayField('idRazonSocial');
        $this->setPrimaryKey('idRazonSocial');
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
            ->integer('idRazonSocial')
            ->allowEmpty('idRazonSocial', 'create');

        $validator
            ->requirePresence('nombreRazon', 'create')
            ->notEmpty('nombreRazon');

        $validator
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->integer('Direccion_idDireccion')
            ->requirePresence('Direccion_idDireccion', 'create')
            ->notEmpty('Direccion_idDireccion');

        return $validator;
    }
}

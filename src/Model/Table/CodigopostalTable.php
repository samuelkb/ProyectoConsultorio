<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Codigopostal Model
 *
 * @method \App\Model\Entity\Codigopostal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Codigopostal newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Codigopostal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Codigopostal|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Codigopostal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Codigopostal[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Codigopostal findOrCreate($search, callable $callback = null, $options = [])
 */
class CodigopostalTable extends Table
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

        $this->setTable('codigopostal');
        $this->setDisplayField('idCodigoPostal');
        $this->setPrimaryKey('idCodigoPostal');

        $this->hasMany('Direccion',['foreignKey' =>'idCodigoPostal']);
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
            ->integer('idCodigoPostal')
            ->allowEmpty('idCodigoPostal', 'create');

        $validator
            ->allowEmpty('ciudad');

        return $validator;
    }
}

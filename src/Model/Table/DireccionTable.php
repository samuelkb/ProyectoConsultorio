<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Direccion Model
 *
 * @method \App\Model\Entity\Direccion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Direccion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Direccion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Direccion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Direccion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Direccion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Direccion findOrCreate($search, callable $callback = null, $options = [])
 */
class DireccionTable extends Table
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

        $this->setTable('direccion');
        $this->setDisplayField('idDireccion');
        $this->setPrimaryKey('idDireccion');
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
            ->integer('idDireccion')
            ->allowEmpty('idDireccion', 'create');

        $validator
            ->requirePresence('nombreCalle', 'create')
            ->notEmpty('nombreCalle');

        $validator
            ->integer('numeroExterno')
            ->requirePresence('numeroExterno', 'create')
            ->notEmpty('numeroExterno');

        $validator
            ->integer('numeroInterior')
            ->allowEmpty('numeroInterior');

        $validator
            ->integer('CodigoPostal_idCodigoPostal')
            ->requirePresence('CodigoPostal_idCodigoPostal', 'create')
            ->notEmpty('CodigoPostal_idCodigoPostal');

        $validator
            ->integer('Estado_idEstado')
            ->requirePresence('Estado_idEstado', 'create')
            ->notEmpty('Estado_idEstado');

        return $validator;
    }
}

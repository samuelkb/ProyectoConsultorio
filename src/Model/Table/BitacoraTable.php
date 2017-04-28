<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bitacora Model
 *
 * @method \App\Model\Entity\Bitacora get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bitacora newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bitacora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bitacora|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bitacora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bitacora[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bitacora findOrCreate($search, callable $callback = null, $options = [])
 */
class BitacoraTable extends Table
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

        $this->setTable('bitacora');
        $this->setDisplayField('idBitacora');
        $this->setPrimaryKey('idBitacora');
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
            ->integer('idBitacora')
            ->allowEmpty('idBitacora', 'create');

        $validator
            ->requirePresence('operacion', 'create')
            ->notEmpty('operacion');

        $validator
            ->requirePresence('usuario', 'create')
            ->notEmpty('usuario');

        $validator
            ->requirePresence('servidor', 'create')
            ->notEmpty('servidor');

        $validator
            ->dateTime('modificado')
            ->requirePresence('modificado', 'create')
            ->notEmpty('modificado');

        $validator
            ->requirePresence('tabla', 'create')
            ->notEmpty('tabla');

        return $validator;
    }
}

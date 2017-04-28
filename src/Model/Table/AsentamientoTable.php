<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Asentamiento Model
 *
 * @method \App\Model\Entity\Asentamiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Asentamiento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Asentamiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Asentamiento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asentamiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Asentamiento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Asentamiento findOrCreate($search, callable $callback = null, $options = [])
 */
class AsentamientoTable extends Table
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

        $this->setTable('asentamiento');
        $this->setDisplayField('idAsentamiento');
        $this->setPrimaryKey(['idAsentamiento', 'CodigoPostal_idCodigoPostal']);
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
            ->integer('idAsentamiento')
            ->allowEmpty('idAsentamiento', 'create');

        $validator
            ->requirePresence('nombreAsentamiento', 'create')
            ->notEmpty('nombreAsentamiento');

        $validator
            ->integer('TipoAsentamiento_idTipoAsentamiento')
            ->requirePresence('TipoAsentamiento_idTipoAsentamiento', 'create')
            ->notEmpty('TipoAsentamiento_idTipoAsentamiento');

        $validator
            ->integer('CodigoPostal_idCodigoPostal')
            ->allowEmpty('CodigoPostal_idCodigoPostal', 'create');

        return $validator;
    }
}

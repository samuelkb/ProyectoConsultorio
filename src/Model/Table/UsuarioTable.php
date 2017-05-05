<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuario Model
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null, $options = [])
 */
class UsuarioTable extends Table
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

        $this->setTable('usuario');
        $this->setDisplayField('idUsuario');
        $this->setPrimaryKey('idUsuario');
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
            ->integer('idUsuario')
            ->allowEmpty('idUsuario', 'create');

        $validator
            ->requirePresence('nombreUsuario', 'create')
            ->notEmpty('nombreUsuario');

        $validator
            ->requirePresence('apellidoPaterno', 'create')
            ->notEmpty('apellidoPaterno');

        $validator
            ->allowEmpty('role');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->integer('Direccion_idDireccion')
            ->requirePresence('Direccion_idDireccion', 'create')
            ->notEmpty('Direccion_idDireccion');

        $validator
            ->integer('Contacto_idContacto')
            ->requirePresence('Contacto_idContacto', 'create')
            ->notEmpty('Contacto_idContacto');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['nombreUsuario']));
        return $rules;
    }
}

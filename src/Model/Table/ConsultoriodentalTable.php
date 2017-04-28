<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Consultoriodental Model
 *
 * @method \App\Model\Entity\Consultoriodental get($primaryKey, $options = [])
 * @method \App\Model\Entity\Consultoriodental newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Consultoriodental[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Consultoriodental|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Consultoriodental patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Consultoriodental[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Consultoriodental findOrCreate($search, callable $callback = null, $options = [])
 */
class ConsultoriodentalTable extends Table
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

        $this->setTable('consultoriodental');
        $this->setDisplayField('idConsultorioDental');
        $this->setPrimaryKey('idConsultorioDental');

        $this->hasMany('Inventario',['foreignKey' =>'idConsultoriodental']);
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
            ->integer('idConsultorioDental')
            ->allowEmpty('idConsultorioDental', 'create');

        $validator
            ->requirePresence('nombreConsultorio', 'create')
            ->notEmpty('nombreConsultorio');

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
}

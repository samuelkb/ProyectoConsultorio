<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inventario Model
 *
 * @method \App\Model\Entity\Inventario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Inventario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Inventario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Inventario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inventario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Inventario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Inventario findOrCreate($search, callable $callback = null, $options = [])
 */
class InventarioTable extends Table
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

        $this->setTable('inventario');
        $this->setDisplayField('idInventario');
        $this->setPrimaryKey('idInventario');

        $this->belongsTo('categoria',['foreignKey'=>'idCategoria', 'joinType' => 'INNER']);
        $this->belongsTo('consultoriodental',['foreignKey'=>'idConsultoriodental', 'joinType' => 'INNER']);
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
            ->integer('idInventario')
            ->allowEmpty('idInventario', 'create');

        $validator
            ->requirePresence('nombreItem', 'create')
            ->notEmpty('nombreItem');

        $validator
            ->allowEmpty('descripcionItem');

        $validator
            ->integer('stock')
            ->requirePresence('stock', 'create')
            ->notEmpty('stock');

        $validator
            ->date('fechaDeCaducidad')
            ->allowEmpty('fechaDeCaducidad');

        $validator
            ->integer('Categoria_idCategoria')
            ->requirePresence('Categoria_idCategoria', 'create')
            ->notEmpty('Categoria_idCategoria');

        $validator
            ->integer('ConsultorioDental_idConsultorioDental')
            ->requirePresence('ConsultorioDental_idConsultorioDental', 'create')
            ->notEmpty('ConsultorioDental_idConsultorioDental');

        return $validator;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recibo Model
 *
 * @method \App\Model\Entity\Recibo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recibo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Recibo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recibo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recibo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recibo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recibo findOrCreate($search, callable $callback = null, $options = [])
 */
class ReciboTable extends Table
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

        $this->setTable('recibo');
        $this->setDisplayField('idRecibo');
        $this->setPrimaryKey('idRecibo');
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
            ->integer('idRecibo')
            ->allowEmpty('idRecibo', 'create');

        $validator
            ->date('fechaExpedido')
            ->requirePresence('fechaExpedido', 'create')
            ->notEmpty('fechaExpedido');

        $validator
            ->integer('Pago_idPago')
            ->requirePresence('Pago_idPago', 'create')
            ->notEmpty('Pago_idPago');

        return $validator;
    }
}

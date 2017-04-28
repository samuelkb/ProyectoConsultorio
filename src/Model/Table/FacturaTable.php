<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Factura Model
 *
 * @method \App\Model\Entity\Factura get($primaryKey, $options = [])
 * @method \App\Model\Entity\Factura newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Factura[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Factura|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Factura patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Factura[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Factura findOrCreate($search, callable $callback = null, $options = [])
 */
class FacturaTable extends Table
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

        $this->setTable('factura');
        $this->setDisplayField('idFactura');
        $this->setPrimaryKey('idFactura');
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
            ->integer('idFactura')
            ->allowEmpty('idFactura', 'create');

        $validator
            ->requirePresence('RFC', 'create')
            ->notEmpty('RFC');

        $validator
            ->numeric('IVA')
            ->requirePresence('IVA', 'create')
            ->notEmpty('IVA');

        $validator
            ->numeric('desglose')
            ->requirePresence('desglose', 'create')
            ->notEmpty('desglose');

        $validator
            ->integer('Contacto_idContacto')
            ->requirePresence('Contacto_idContacto', 'create')
            ->notEmpty('Contacto_idContacto');

        $validator
            ->integer('RazonSocial_idRazonSocial')
            ->requirePresence('RazonSocial_idRazonSocial', 'create')
            ->notEmpty('RazonSocial_idRazonSocial');

        $validator
            ->integer('Pago_idPago')
            ->requirePresence('Pago_idPago', 'create')
            ->notEmpty('Pago_idPago');

        return $validator;
    }
}

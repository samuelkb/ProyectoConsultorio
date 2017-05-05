<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Catalogoservicios Model
 *
 * @method \App\Model\Entity\Catalogoservicio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Catalogoservicio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Catalogoservicio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Catalogoservicio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Catalogoservicio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Catalogoservicio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Catalogoservicio findOrCreate($search, callable $callback = null, $options = [])
 */
class CatalogoserviciosTable extends Table
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

        $this->setTable('catalogoservicios');
        $this->setDisplayField('idCatalogoServicios');
        $this->setPrimaryKey('idCatalogoServicios');

        $this->hasMany('Cita',['foreignKey'=>'idCita','joinType'=>'INNER']);
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
            ->integer('idCatalogoServicios')
            ->allowEmpty('idCatalogoServicios', 'create');

        $validator
            ->requirePresence('descripcionServicio', 'create')
            ->notEmpty('descripcionServicio');

        $validator
            ->numeric('costoServicio')
            ->requirePresence('costoServicio', 'create')
            ->notEmpty('costoServicio');

        $validator
            ->requirePresence('Especificaciones', 'create')
            ->notEmpty('Especificaciones');

        return $validator;
    }
}

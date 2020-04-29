<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estadio Model
 *
 * @property \App\Model\Table\DireccionTable&\Cake\ORM\Association\BelongsTo $Direccion
 *
 * @method \App\Model\Entity\Estadio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estadio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estadio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estadio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estadio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estadio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estadio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estadio findOrCreate($search, callable $callback = null, $options = [])
 */
class EstadioTable extends Table
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

        $this->setTable('estadio');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Direccion', [
            'foreignKey' => 'direccion_id',
            'joinType' => 'INNER',
        ]);
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('sede')
            ->maxLength('sede', 255)
            ->requirePresence('sede', 'create')
            ->notEmptyString('sede');

        $validator
            ->integer('capacidad')
            ->requirePresence('capacidad', 'create')
            ->notEmptyString('capacidad');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['direccion_id'], 'Direccion'));

        return $rules;
    }
}

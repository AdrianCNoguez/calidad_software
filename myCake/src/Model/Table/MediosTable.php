<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Medios Model
 *
 * @property \App\Model\Table\EquipoTable&\Cake\ORM\Association\BelongsTo $Equipo
 *
 * @method \App\Model\Entity\Medio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Medio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Medio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Medio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Medio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Medio findOrCreate($search, callable $callback = null, $options = [])
 */
class MediosTable extends Table
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

        $this->setTable('medios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Equipo', [
            'foreignKey' => 'equipo_id',
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
            ->scalar('tipo')
            ->maxLength('tipo', 255)
            ->requirePresence('tipo', 'create')
            ->notEmptyString('tipo');

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
        $rules->add($rules->existsIn(['equipo_id'], 'Equipo'));

        return $rules;
    }
}

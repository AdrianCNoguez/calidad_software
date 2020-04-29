<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Red Model
 *
 * @property \App\Model\Table\EquipoTable&\Cake\ORM\Association\BelongsTo $Equipo
 *
 * @method \App\Model\Entity\Red get($primaryKey, $options = [])
 * @method \App\Model\Entity\Red newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Red[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Red|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Red saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Red patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Red[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Red findOrCreate($search, callable $callback = null, $options = [])
 */
class RedTable extends Table
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

        $this->setTable('red');
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
            ->scalar('Tw')
            ->maxLength('Tw', 255)
            ->requirePresence('Tw', 'create')
            ->notEmptyString('Tw');

        $validator
            ->scalar('Fb')
            ->maxLength('Fb', 255)
            ->requirePresence('Fb', 'create')
            ->notEmptyString('Fb');

        $validator
            ->scalar('Insta')
            ->maxLength('Insta', 255)
            ->requirePresence('Insta', 'create')
            ->notEmptyString('Insta');

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

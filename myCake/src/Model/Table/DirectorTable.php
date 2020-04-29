<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Director Model
 *
 * @property \App\Model\Table\PersonaTable&\Cake\ORM\Association\BelongsTo $Persona
 *
 * @method \App\Model\Entity\Director get($primaryKey, $options = [])
 * @method \App\Model\Entity\Director newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Director[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Director|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Director saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Director patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Director[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Director findOrCreate($search, callable $callback = null, $options = [])
 */
class DirectorTable extends Table
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

        $this->setTable('director');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Persona', [
            'foreignKey' => 'persona_id',
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
            ->scalar('Alias')
            ->maxLength('Alias', 255)
            ->requirePresence('Alias', 'create')
            ->notEmptyString('Alias');

        $validator
            ->scalar('tiempo_club')
            ->maxLength('tiempo_club', 255)
            ->requirePresence('tiempo_club', 'create')
            ->notEmptyString('tiempo_club');

        $validator
            ->requirePresence('Liguillas', 'create')
            ->notEmptyString('Liguillas');

        $validator
            ->requirePresence('TorneosEquipo', 'create')
            ->notEmptyString('TorneosEquipo');

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
        $rules->add($rules->existsIn(['persona_id'], 'Persona'));

        return $rules;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Temporada Model
 *
 * @property \App\Model\Table\LigasTable&\Cake\ORM\Association\BelongsTo $Ligas
 *
 * @method \App\Model\Entity\Temporada get($primaryKey, $options = [])
 * @method \App\Model\Entity\Temporada newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Temporada[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Temporada|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Temporada saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Temporada patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Temporada[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Temporada findOrCreate($search, callable $callback = null, $options = [])
 */
class TemporadaTable extends Table
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

        $this->setTable('temporada');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Ligas', [
            'foreignKey' => 'ligas_id',
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
            ->scalar('nombreTemporada')
            ->maxLength('nombreTemporada', 255)
            ->requirePresence('nombreTemporada', 'create')
            ->notEmptyString('nombreTemporada');

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
        $rules->add($rules->existsIn(['ligas_id'], 'Ligas'));

        return $rules;
    }
}

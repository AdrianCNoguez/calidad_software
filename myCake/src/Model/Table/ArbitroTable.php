<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Arbitro Model
 *
 * @property \App\Model\Table\LigasTable&\Cake\ORM\Association\BelongsTo $Ligas
 * @property \App\Model\Table\EncuentroTable&\Cake\ORM\Association\BelongsTo $Encuentro
 *
 * @method \App\Model\Entity\Arbitro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Arbitro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Arbitro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Arbitro|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Arbitro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Arbitro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Arbitro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Arbitro findOrCreate($search, callable $callback = null, $options = [])
 */
class ArbitroTable extends Table
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

        $this->setTable('arbitro');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Ligas', [
            'foreignKey' => 'ligas_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Encuentro', [
            'foreignKey' => 'encuentro_id',
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
            ->scalar('posicion')
            ->maxLength('posicion', 255)
            ->requirePresence('posicion', 'create')
            ->notEmptyString('posicion');

        $validator
            ->scalar('partidosJ')
            ->maxLength('partidosJ', 255)
            ->requirePresence('partidosJ', 'create')
            ->notEmptyString('partidosJ');

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
        $rules->add($rules->existsIn(['encuentro_id'], 'Encuentro'));

        return $rules;
    }
}

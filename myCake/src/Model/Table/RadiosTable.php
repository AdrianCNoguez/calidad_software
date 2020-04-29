<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Radios Model
 *
 * @property \App\Model\Table\MediosTable&\Cake\ORM\Association\BelongsTo $Medios
 * @property \App\Model\Table\EncuentroTable&\Cake\ORM\Association\BelongsTo $Encuentro
 *
 * @method \App\Model\Entity\Radio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Radio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Radio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Radio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Radio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Radio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Radio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Radio findOrCreate($search, callable $callback = null, $options = [])
 */
class RadiosTable extends Table
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

        $this->setTable('radios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Medios', [
            'foreignKey' => 'medios_id',
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
            ->scalar('Radiodifusora')
            ->maxLength('Radiodifusora', 255)
            ->requirePresence('Radiodifusora', 'create')
            ->notEmptyString('Radiodifusora');

        $validator
            ->numeric('sintonia')
            ->requirePresence('sintonia', 'create')
            ->notEmptyString('sintonia');

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
        $rules->add($rules->existsIn(['medios_id'], 'Medios'));
        $rules->add($rules->existsIn(['encuentro_id'], 'Encuentro'));

        return $rules;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Encuentro Model
 *
 * @property \App\Model\Table\EquipoTable&\Cake\ORM\Association\BelongsTo $Equipo
 *
 * @method \App\Model\Entity\Encuentro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Encuentro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Encuentro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Encuentro|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Encuentro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Encuentro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Encuentro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Encuentro findOrCreate($search, callable $callback = null, $options = [])
 */
class EncuentroTable extends Table
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

        $this->setTable('encuentro');
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
            ->scalar('NombreEcuentro')
            ->maxLength('NombreEcuentro', 255)
            ->requirePresence('NombreEcuentro', 'create')
            ->notEmptyString('NombreEcuentro');

        $validator
            ->scalar('local')
            ->maxLength('local', 255)
            ->requirePresence('local', 'create')
            ->notEmptyString('local');

        $validator
            ->scalar('visinte')
            ->maxLength('visinte', 255)
            ->requirePresence('visinte', 'create')
            ->notEmptyString('visinte');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmptyDate('fecha');

        $validator
            ->time('hora')
            ->requirePresence('hora', 'create')
            ->notEmptyTime('hora');

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

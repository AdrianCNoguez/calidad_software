<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipo Model
 *
 * @property \App\Model\Table\EstadioTable&\Cake\ORM\Association\BelongsTo $Estadio
 *
 * @method \App\Model\Entity\Equipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Equipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Equipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equipo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equipo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Equipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equipo findOrCreate($search, callable $callback = null, $options = [])
 */
class EquipoTable extends Table
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

        $this->setTable('equipo');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Estadio', [
            'foreignKey' => 'estadio_id',
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
            ->scalar('nomEquipo')
            ->maxLength('nomEquipo', 255)
            ->requirePresence('nomEquipo', 'create')
            ->notEmptyString('nomEquipo');

        $validator
            ->integer('Atq')
            ->requirePresence('Atq', 'create')
            ->notEmptyString('Atq');

        $validator
            ->integer('Med')
            ->requirePresence('Med', 'create')
            ->notEmptyString('Med');

        $validator
            ->integer('Def')
            ->requirePresence('Def', 'create')
            ->notEmptyString('Def');

        $validator
            ->scalar('valor')
            ->maxLength('valor', 255)
            ->requirePresence('valor', 'create')
            ->notEmptyString('valor');

        $validator
            ->numeric('calidad')
            ->requirePresence('calidad', 'create')
            ->notEmptyString('calidad');

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
        $rules->add($rules->existsIn(['estadio_id'], 'Estadio'));

        return $rules;
    }
}

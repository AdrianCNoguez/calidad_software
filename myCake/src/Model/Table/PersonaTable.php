<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Persona Model
 *
 * @property \App\Model\Table\EquipoTable&\Cake\ORM\Association\BelongsTo $Equipo
 *
 * @method \App\Model\Entity\Persona get($primaryKey, $options = [])
 * @method \App\Model\Entity\Persona newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Persona[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Persona|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Persona[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Persona findOrCreate($search, callable $callback = null, $options = [])
 */
class PersonaTable extends Table
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

        $this->setTable('persona');
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
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellidoP')
            ->maxLength('apellidoP', 255)
            ->requirePresence('apellidoP', 'create')
            ->notEmptyString('apellidoP');

        $validator
            ->scalar('apellidoM')
            ->maxLength('apellidoM', 255)
            ->requirePresence('apellidoM', 'create')
            ->notEmptyString('apellidoM');

        $validator
            ->scalar('edad')
            ->maxLength('edad', 255)
            ->requirePresence('edad', 'create')
            ->notEmptyString('edad');

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

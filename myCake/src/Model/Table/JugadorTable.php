<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jugador Model
 *
 * @property \App\Model\Table\PersonaTable&\Cake\ORM\Association\BelongsTo $Persona
 *
 * @method \App\Model\Entity\Jugador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jugador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jugador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jugador|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jugador saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jugador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jugador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jugador findOrCreate($search, callable $callback = null, $options = [])
 */
class JugadorTable extends Table
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

        $this->setTable('jugador');
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
            ->scalar('Nacionalidad')
            ->maxLength('Nacionalidad', 255)
            ->requirePresence('Nacionalidad', 'create')
            ->notEmptyString('Nacionalidad');

        $validator
            ->numeric('Estatura')
            ->requirePresence('Estatura', 'create')
            ->notEmptyString('Estatura');

        $validator
            ->numeric('Peso')
            ->requirePresence('Peso', 'create')
            ->notEmptyString('Peso');

        $validator
            ->scalar('MovilHabil')
            ->maxLength('MovilHabil', 255)
            ->requirePresence('MovilHabil', 'create')
            ->notEmptyString('MovilHabil');

        $validator
            ->scalar('Posicion')
            ->maxLength('Posicion', 255)
            ->requirePresence('Posicion', 'create')
            ->notEmptyString('Posicion');

        $validator
            ->scalar('Perfil')
            ->maxLength('Perfil', 255)
            ->requirePresence('Perfil', 'create')
            ->notEmptyString('Perfil');

        $validator
            ->scalar('Pie_Debil')
            ->maxLength('Pie_Debil', 255)
            ->requirePresence('Pie_Debil', 'create')
            ->notEmptyString('Pie_Debil');

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

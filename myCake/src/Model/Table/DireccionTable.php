<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Direccion Model
 *
 * @property \App\Model\Table\ColoniaTable&\Cake\ORM\Association\BelongsTo $Colonia
 *
 * @method \App\Model\Entity\Direccion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Direccion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Direccion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Direccion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Direccion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Direccion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Direccion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Direccion findOrCreate($search, callable $callback = null, $options = [])
 */
class DireccionTable extends Table
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

        $this->setTable('direccion');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Colonia', [
            'foreignKey' => 'colonia_id',
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
            ->scalar('calle')
            ->maxLength('calle', 255)
            ->requirePresence('calle', 'create')
            ->notEmptyString('calle');

        $validator
            ->integer('No')
            ->requirePresence('No', 'create')
            ->notEmptyString('No');

        $validator
            ->integer('Cp')
            ->requirePresence('Cp', 'create')
            ->notEmptyString('Cp');

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
        $rules->add($rules->existsIn(['colonia_id'], 'Colonia'));

        return $rules;
    }
}

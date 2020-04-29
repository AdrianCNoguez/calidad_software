<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Colonia Model
 *
 * @property \App\Model\Table\MunicipioTable&\Cake\ORM\Association\BelongsTo $Municipio
 *
 * @method \App\Model\Entity\Colonia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Colonia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Colonia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Colonia|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Colonia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Colonia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Colonia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Colonia findOrCreate($search, callable $callback = null, $options = [])
 */
class ColoniaTable extends Table
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

        $this->setTable('colonia');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Municipio', [
            'foreignKey' => 'municipio_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @retur n \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('colonia')
            ->maxLength('colonia', 255)
            ->requirePresence('colonia', 'create')
            ->notEmptyString('colonia');

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
        $rules->add($rules->existsIn(['municipio_id'], 'Municipio'));

        return $rules;
    }
}

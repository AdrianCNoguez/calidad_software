<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Patrocinador Model
 *
 * @property \App\Model\Table\EstadioTable&\Cake\ORM\Association\BelongsTo $Estadio
 *
 * @method \App\Model\Entity\Patrocinador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Patrocinador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Patrocinador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Patrocinador|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Patrocinador saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Patrocinador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Patrocinador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Patrocinador findOrCreate($search, callable $callback = null, $options = [])
 */
class PatrocinadorTable extends Table
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

        $this->setTable('patrocinador');
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
            ->scalar('patro')
            ->maxLength('patro', 255)
            ->requirePresence('patro', 'create')
            ->notEmptyString('patro');

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

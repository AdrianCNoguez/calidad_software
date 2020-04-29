<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ligas Model
 *
 * @method \App\Model\Entity\Liga get($primaryKey, $options = [])
 * @method \App\Model\Entity\Liga newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Liga[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Liga|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Liga saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Liga patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Liga[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Liga findOrCreate($search, callable $callback = null, $options = [])
 */
class LigasTable extends Table
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

        $this->setTable('ligas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('nombreLiga')
            ->maxLength('nombreLiga', 255)
            ->requirePresence('nombreLiga', 'create')
            ->notEmptyString('nombreLiga');

        $validator
            ->scalar('annio')
            ->maxLength('annio', 255)
            ->requirePresence('annio', 'create')
            ->notEmptyString('annio');

        return $validator;
    }
}

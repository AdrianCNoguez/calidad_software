<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articulo Model
 *
 * @property \App\Model\Table\TiendaTable&\Cake\ORM\Association\BelongsTo $Tienda
 *
 * @method \App\Model\Entity\Articulo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Articulo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Articulo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Articulo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Articulo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Articulo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Articulo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Articulo findOrCreate($search, callable $callback = null, $options = [])
 */
class ArticuloTable extends Table
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

        $this->setTable('articulo');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tienda', [
            'foreignKey' => 'tienda_id',
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
            ->scalar('nombreArt')
            ->maxLength('nombreArt', 255)
            ->requirePresence('nombreArt', 'create')
            ->notEmptyString('nombreArt');

        $validator
            ->numeric('precio')
            ->requirePresence('precio', 'create')
            ->notEmptyString('precio');

        $validator
            ->numeric('promocion')
            ->requirePresence('promocion', 'create')
            ->notEmptyString('promocion');

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
        $rules->add($rules->existsIn(['tienda_id'], 'Tienda'));

        return $rules;
    }
}

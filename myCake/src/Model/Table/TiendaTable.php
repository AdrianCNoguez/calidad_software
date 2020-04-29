<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tienda Model
 *
 * @property \App\Model\Table\EstadioTable&\Cake\ORM\Association\BelongsTo $Estadio
 * @property \App\Model\Table\PatrocinadorTable&\Cake\ORM\Association\BelongsTo $Patrocinador
 * @property \App\Model\Table\ArticuloTable&\Cake\ORM\Association\HasMany $Articulo
 *
 * @method \App\Model\Entity\Tienda get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tienda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tienda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tienda|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tienda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tienda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tienda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tienda findOrCreate($search, callable $callback = null, $options = [])
 */
class TiendaTable extends Table
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

        $this->setTable('tienda');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Estadio', [
            'foreignKey' => 'estadio_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Patrocinador', [
            'foreignKey' => 'patrocinador_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Articulo', [
            'foreignKey' => 'tienda_id',
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
            ->scalar('Nom_tienda')
            ->maxLength('Nom_tienda', 255)
            ->requirePresence('Nom_tienda', 'create')
            ->notEmptyString('Nom_tienda');

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
        $rules->add($rules->existsIn(['patrocinador_id'], 'Patrocinador'));

        return $rules;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Storagelocation Model
 *
 * @method \App\Model\Entity\Storagelocation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Storagelocation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Storagelocation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Storagelocation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Storagelocation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Storagelocation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Storagelocation findOrCreate($search, callable $callback = null, $options = [])
 */
class StorageLocationTable extends Table
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

        $this->setTable('storagelocation');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        
        $this->hasMany('Storagemarkers', [
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('city')
            ->requirePresence('city', 'create')
            ->notEmpty('city')
            ->add('city', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['city']));

        return $rules;

    }
}

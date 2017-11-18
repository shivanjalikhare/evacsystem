<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Storagemarkers Model
 *
 * @method \App\Model\Entity\Storagemarker get($primaryKey, $options = [])
 * @method \App\Model\Entity\Storagemarker newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Storagemarker[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Storagemarker|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Storagemarker patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Storagemarker[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Storagemarker findOrCreate($search, callable $callback = null, $options = [])
 */
class StoragemarkersTable extends Table
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

        $this->setTable('storagemarkers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Storagelocation', [
            'foreignKey' => 'not_city',
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
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->numeric('lat')
            ->requirePresence('lat', 'create')
            ->notEmpty('lat');

        $validator
            ->numeric('lng')
            ->requirePresence('lng', 'create')
            ->notEmpty('lng');

        $validator
            ->scalar('type')
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        return $validator;
    }
}

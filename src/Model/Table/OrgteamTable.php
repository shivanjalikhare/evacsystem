<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orgteam Model
 *
 * @method \App\Model\Entity\Orgteam get($primaryKey, $options = [])
 * @method \App\Model\Entity\Orgteam newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Orgteam[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Orgteam|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Orgteam patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Orgteam[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Orgteam findOrCreate($search, callable $callback = null, $options = [])
 */
class OrgteamTable extends Table
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

        $this->setTable('orgteam');
        $this->setDisplayField('teamid');
        $this->setPrimaryKey('teamid');
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
            ->integer('teamid')
            ->allowEmpty('teamid', 'create');

        $validator
            ->scalar('teamname')
            ->requirePresence('teamname', 'create')
            ->notEmpty('teamname');

        $validator
            ->integer('members')
            ->requirePresence('members', 'create')
            ->notEmpty('members');

        $validator
            ->scalar('details')
            ->requirePresence('details', 'create')
            ->notEmpty('details');

        $validator
            ->scalar('contact')
            ->requirePresence('contact', 'create')
            ->notEmpty('contact');

        return $validator;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Volunteerregistration Model
 *
 * @method \App\Model\Entity\Volunteerregistration get($primaryKey, $options = [])
 * @method \App\Model\Entity\Volunteerregistration newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Volunteerregistration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Volunteerregistration|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Volunteerregistration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Volunteerregistration[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Volunteerregistration findOrCreate($search, callable $callback = null, $options = [])
 */
class VolunteerregistrationTable extends Table
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

        $this->setTable('volunteerregistration');
        $this->setDisplayField('name');
        $this->setPrimaryKey('regid');
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
            ->integer('regid')
            ->allowEmpty('regid', 'create');

        $validator
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('emailid')
            ->requirePresence('emailid', 'create')
            ->notEmpty('emailid');

        $validator
            ->scalar('profession')
            ->requirePresence('profession', 'create')
            ->notEmpty('profession');

        $validator
            ->scalar('supporttype')
            ->requirePresence('supporttype', 'create')
            ->notEmpty('supporttype');

        $validator
            ->scalar('location')
            ->requirePresence('location', 'create')
            ->notEmpty('location');

        $validator
            ->scalar('notes')
            ->requirePresence('notes', 'create')
            ->allowEmpty('notes');

        return $validator;
    }
}

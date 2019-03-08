<?php
namespace Activity\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Activities Model
 *
 * @method \Activity\Model\Entity\Activity get($primaryKey, $options = [])
 * @method \Activity\Model\Entity\Activity newEntity($data = null, array $options = [])
 * @method \Activity\Model\Entity\Activity[] newEntities(array $data, array $options = [])
 * @method \Activity\Model\Entity\Activity|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Activity\Model\Entity\Activity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Activity\Model\Entity\Activity[] patchEntities($entities, array $data, array $options = [])
 * @method \Activity\Model\Entity\Activity findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ActivitiesTable extends Table
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

        $this->table('activities');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmpty('model');

        $validator
            ->integer('foreign_key')
            ->allowEmpty('foreign_key');

        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('message');

        $validator
            ->allowEmpty('data');

        return $validator;
    }
}

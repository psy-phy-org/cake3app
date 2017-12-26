<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NextBoards Model
 *
 * @property \App\Model\Table\PersonsTable|\Cake\ORM\Association\BelongsTo $Persons
 *
 * @method \App\Model\Entity\NextBoard get($primaryKey, $options = [])
 * @method \App\Model\Entity\NextBoard newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\NextBoard[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NextBoard|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NextBoard patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\NextBoard[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\NextBoard findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TreeBehavior
 */
class NextBoardsTable extends Table
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

        $this->addBehavior('Tree');


        $this->belongsTo('ParentNextBoards', [
            'className' => 'NextBoards',
            'foreignKey' => 'parent_id'
        ]);

        $this->belongsTo('Persons');
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
            ->integer('id');
        $validator
            ->requirePresence('parent_id');
        $validator
            ->requirePresence('person_id');
        $validator
            ->requirePresence('title')
            ->notEmpty('title');
        $validator
            ->requirePresence('content')
            ->notEmpty('content');
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
        $rules->add($rules->existsIn(['person_id'], 'Persons'));

        return $rules;
    }
}

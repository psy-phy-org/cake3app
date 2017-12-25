<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

class ArticlesTable extends Table
{
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['name'], '既に登録済みです。'));
        return $rules;
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id');
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name', '必須項目です。')
            ->add('name', [
                'minLength' => [
                    'rule' => ['minLength', 5],
                    'message' => '5文字以上で入力してください',
                    'last' => true
                ],
                'maxLength' => [
                    'rule' => ['maxLength', 10],
                    'message' => '10文字以内で入力してください。'
                ]
            ]);
        $validator
            ->notEmpty('title');
        $validator
            ->notEmpty('content');
        $validator
            ->add(
                'content',
                'custom',
                [
                    'rule'=>['custom', "/\A\d+\z/"],
                    'message' => '整数を入力してください。'
                ]
            );
        return $validator;
    }
}

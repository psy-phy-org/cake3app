<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
        $this->belongsTo('Persons');
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
        $validator
            ->add(
                'name',
                'maxRecords',
                [
                'rule' => ['maxRecords', 'name', 3],
                'message' => __('最大数を超えています。'),
                'provider' => 'table',
                ]
            );
        return $validator;
    }

    public function maxRecords($data, $field, $num)
    {
        $n = $this->find()
            ->where([$field => $data])
            ->count();
        return $n < $num ? true : false;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

class PersonsTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasMany('Articles');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id');
        $validator
            ->notEmpty('name', '必須項目です。');
        $validator
            ->notEmpty('password', '必須項目です。');
        $validator
            ->notEmpty('comment', '必須項目です。');
        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->isUnique(['name'], '既に登録済みです。');
        return $rules;
    }

    public function checkNameAndPassword($data)
    {
        $n = $this->find()
            ->where(['name' => $data['name']])
            ->andWhere(['password' => $data['password']])
            ->count();
        return $n > 0 ? true : false;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArticlesTable extends Table
{
    public function validationDefault(Validator $validator)
    {
        $validator->integer('id');
        $validator->notEmpty('name');
        $validator->notEmpty('title');
        $validator->notEmpty('content');
        return $validator;
    }
}

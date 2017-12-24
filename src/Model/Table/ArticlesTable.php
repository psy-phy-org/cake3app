<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->entityClass('Book');
    }
}

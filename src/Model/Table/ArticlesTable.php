<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Event\Event;
use Cake\ORM\Query;

class ArticlesTable extends Table
{
    public $qdata = 'unll';

    public function beforeFind(Event $event, Query $query)
    {
        $query->order(['name' => 'ASC']);
    }
}

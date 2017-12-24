<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Event\Event;
use Cake\Datasource\EntityInterface;

class ArticlesTable extends Table
{
    public function beforeSave(Event $event, EntityInterface $entity, $options)
    {
        $n = $this->find('all', ['conditions' => ['name' => $entity->name]])
            ->count();
        if ($n == 0) {
            return true;
        } else {
            return false;
        }
    }
}

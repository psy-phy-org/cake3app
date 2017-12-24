<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Event\Event;

class ArticlesTable extends Table
{
    public $qdata = 'unll';

    public function beforeFind(Event $event)
    {
        $qstr = '';
        for ($i=0; $i<count($event->data); $i++) {
            $query = $event->data[0];
            $qstr = $query->sql()."<br>\n";
        }
        $this->qdata = $qstr;
    }
}

<?php
namespace App\Controller;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class PracticesController extends AppController
{
    public function initialize()
    {
        $this->name = 'Practices';
        parent::initialize();
        $this->articles = TableRegistry::get('Articles');
    }

    public function index()
    {
        $data = $this->articles
            ->find('something', ['field'=>'title','value'=>'%hello%']);
        $this->set('data', $data);
    }
}

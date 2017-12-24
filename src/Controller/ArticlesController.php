<?php
namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController
{
    public function index()
    {
        $this->set('entity', $this->Articles->newEntity());
        if ($this->request->is('post')) {
            $data = $this->Articles->find(
                'all',
                ['conditions' => ['name like' => "%{$this->request->data['name']}%"]]
            );
        } else {
            $data = $this->Articles->find('all');
        }
        $this->set('data', $data->toArray());
        $this->set('count', $data->count());
        $this->set('min', $data->min('id'));
        $this->set('max', $data->max('id'));
        $this->set('first', $data->first()->toArray());
    }
}

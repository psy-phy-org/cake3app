<?php
namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController
{
    public function index($id = null)
    {
        $data = $this->Articles->find();
        if ($this->request->is('post')) {
            $input = $this->request->data['input'];
            $data = $this->Articles
                ->find()
                ->where(['id <=' => $input])
                ->order(['id' => 'DESC']);
        }
        $this->set('data', $data);
        $this->set('entity', $this->Articles->newEntity());
    }
}

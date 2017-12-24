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
                ->where(['name like' => '%'.$input.'%'])
                ->orWhere(['title like' => '%'.$input.'%'])
                ->orWhere(['content like' => '%'.$input.'%']);
        }
        $this->set('data', $data);
        $this->set('entity', $this->Articles->newEntity());
    }
}

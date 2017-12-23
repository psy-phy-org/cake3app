<?php
namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController
{
    public function index()
    {
        $data = $this->Articles->find('all');
        $this->set('data', $data);
        $this->set('entity', $this->Articles->newEntity());
    }

    public function addRecord()
    {
        if ($this->request->is('post')) {
            $article = $this->Articles->newEntity($this->request->data);
            $this->Articles->save($article);
        }
        return $this->redirect(['action' => 'index']);
    }
}

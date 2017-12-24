<?php
namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController
{
    public function index()
    {
        $this->set('entity', $this->Articles->newEntity());
        if ($this->request->is('post')) {
            $id = $this->request->data['id'];
            $data = $this->Articles->findByIdOrName($id, $id);
        } else {
            $data = $this->Articles->find('all');
        }
        $this->set('data', $data->toArray());
        $this->set('count', $data->count());
    }
}

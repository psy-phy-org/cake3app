<?php
namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController
{
    public function index($id = null)
    {
        $data = $this->Articles->find();
        $this->set('data', $data);
        $this->set('entity', $this->Articles->newEntity());
    }
}

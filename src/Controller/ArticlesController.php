<?php
namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController
{
    public function index($id = null)
    {
        $data = $this->Articles->find('all');
        $this->set('data', $data->toArray());
        $this->set('qdata', $this->Articles->qdata);
    }
}

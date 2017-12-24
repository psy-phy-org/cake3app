<?php
namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController
{
    public function index($id = null)
    {
        $data = $this->Articles->find('all')->toArray();
        $this->set('data', $data);
    }
}

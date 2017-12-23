<?php
namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController
{
    public function index()
    {
        $data = $this->Articles->find('all');
        $this->set('data', $data);
    }
}

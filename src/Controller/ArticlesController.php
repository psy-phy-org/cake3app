<?php
namespace App\Controller;

use App\Controller\AppController;

class ArticlesController extends AppController
{
    public function index($id = null)
    {
        $data = $this->Articles->get('hanako');
        $this->set('data', $data);
    }
}

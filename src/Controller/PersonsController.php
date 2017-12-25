<?php
namespace App\Controller;

use App\Controller\AppController;

class PersonsController extends AppController
{
    public function index($id = null)
    {
        $this->Persons->hasMany('Articles');
        $data = $this->Persons
            ->find('all')
            ->contain(['Articles']);
        $this->set('data', $data);
    }
}

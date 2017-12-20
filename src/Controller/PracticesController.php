<?php
namespace App\Controller;

class PracticesController extends AppController
{
    public $name = 'Practices';
    public $autoRender = true;
    public function index()
    {
        $this->viewBuilder()->autoLayout(false);
    }
}

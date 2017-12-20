<?php
namespace App\Controller;

class PracticesController extends AppController
{
    public function initialize()
    {
        $this->name = 'Practices';
        $this->autoRender = false;
        $this->viewBuilder()->autoLayout(false);
    }

    public function index()
    {
        $this->viewBuilder()->autoLayout(true);
        $this->autoRender = true;
    }

    public function other()
    {
        $this->viewBuilder()->autoLayout(false);
        $this->autoRender = true;
    }
}

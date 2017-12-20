<?php
namespace App\Controller;

class PracticesController extends AppController
{
    public function initialize()
    {
        $this->name = 'Practices';
        $this->viewBuilder()->autoLayout(true);
        $this->viewBuilder()->Layout('Practices');
    }

    public function index()
    {
        $this->viewBuilder()->autoLayout(true);
        $this->autoRender = true;
    }
}

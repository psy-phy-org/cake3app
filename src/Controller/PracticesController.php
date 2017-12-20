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
        $this->set('msg', 'Practices/index');
        $n = rand(1, 2);
        $this->set('footer', 'Practices\footer'. $n);
    }
}

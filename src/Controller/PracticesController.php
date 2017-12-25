<?php
namespace App\Controller;

class PracticesController extends AppController
{
    public function initialize()
    {
        $this->name = 'Practices';
        $this->loadComponent('Flash');
    }

    public function index()
    {
        $this->Flash->info('infoメッセージを表示します。');
    }
}

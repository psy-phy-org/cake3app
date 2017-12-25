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
        $this->Flash->set(
            'メッセージを表示します。',
            [
                'element'=>'info',
                'key'=>'info'
            ]
        );
    }
}

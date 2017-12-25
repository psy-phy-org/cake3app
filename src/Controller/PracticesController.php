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
        $this->Flash->success('成功しました！', ['element' => 'flash']);
        $this->Flash->error('失敗です...', ['element' => 'flash']);
    }
}

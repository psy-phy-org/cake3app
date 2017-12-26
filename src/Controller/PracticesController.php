<?php
namespace App\Controller;

class PracticesController extends AppController
{
    public function initialize()
    {
        $this->name = 'Practices';
        $this->loadComponent('Cookie');
        $this->Cookie->config('path', '/');
        $this->Cookie->config('domain', 'localhost');
        $this->Cookie->config('expires', 0);
        $this->Cookie->config('secure', false);
        $this->Cookie->config('httpOnly', true);
        $this->Cookie->config('encryption', false);
    }

    public function index()
    {
        $data = $this->Cookie->read('mykey');
        $this->set('data', $data);
    }

    public function write()
    {
        $val = $this->request->query['val'];
        $this->Cookie->write('mykey', $val);
        $this->redirect(['action' => 'index']);
    }
}

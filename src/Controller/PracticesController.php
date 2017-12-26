<?php
namespace App\Controller;

use Cake\Network\Exception\InvalidCsrfTokenException;

class PracticesController extends AppController
{
    public function initialize()
    {
        $this->name = 'Practices';
        $this->loadComponent('Flash');
        $this->loadComponent('Csrf');
    }

    public function index()
    {
        if ($this->request->is('post')) {
            if (!empty($this->request->data['name']) && !empty($this->request->data['password'])) {
                $this->Flash->success('OK');
            } else {
                $this->Flash->error('bad...');
            }
        } else {
            $this->Flash->info('Please input form:');
        }
    }
}

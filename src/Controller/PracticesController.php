<?php
namespace App\Controller;

use Cake\Event\Event;

class PracticesController extends AppController
{
    public function initialize()
    {
        $this->name = 'Practices';
        parent::initialize();
        $this->loadComponent('Security');
    }

    public function beforeFilter(Event $event)
    {
        if ($this->RequestHandler->isMobile()) {
            echo 'Mobile';
        } else {
            echo 'NOT Mobile';
        }
    }

    public function index()
    {
    }
}

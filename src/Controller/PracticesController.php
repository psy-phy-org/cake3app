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
        $this->Security->config('blackHoleCallback', 'blackhole');
        $this->Security->requireSecure('index');
    }

    public function index()
    {
    }

    public function blackhole()
    {
        echo "<html><head><title>ERROR</title></head>";
        echo '<h1>SECURITY ERROR!!!</h1></body></html>';
        exit;
    }
}

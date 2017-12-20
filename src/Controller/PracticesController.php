<?php
namespace App\Controller;

class PracticesController extends AppController
{
    public $name = 'Practices';
    public $autoRender = false;
    public function index()
    {
        echo 'This is a practice of CakePHP.';
    }
}

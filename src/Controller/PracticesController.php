<?php
namespace App\Controller;

class PracticesController extends AppController
{
    public function initialize()
    {
        $this->name = 'Practices';
        $this->viewBuilder()->autoLayout(true);
        $this->viewBuilder()->Layout('Practices');
        $this->set('msg', 'Practices/index');
        $this->set('footer', 'Practices\footer');
    }

    public function index()
    {
    }

    public function sendForm()
    {
        $str = $this->request->data['text1'];
        $result = '';
        if ($str != '') {
            $result = 'you type: '.$str;
        } else {
            $result = 'empty.';
        }
        $this->set('result', h($result));
    }
}

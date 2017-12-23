<?php
namespace App\Controller;

class PracticesController extends AppController
{
    public function initialize()
    {
        $this->name = 'Practices';
        $this->viewBuilder()->Layout('Practices');
        $this->set('msg', 'Practices/index');
        $this->set('footer', 'Practices\footer');
    }

    public function index()
    {
        $result = '';
        if ($this->request->is('post')) {
            $result = $this->request->data['PracticesForm']['date'];
        } else {
            $result ='日時を選択して送信してください。';
        }
        $this->set('result', h($result));
    }
}

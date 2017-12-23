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
            $result = '送信された情報: ';
            foreach ($this->request->data['PracticesForm'] as $key => $val) {
                $result .= $key.'=>'.$val;
            }
        } else {
            $result ='なにか選択して送信してください。';
        }
        $this->set('result', h($result));
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Validation\Validator;

class ArticlesController extends AppController
{
    public function index($id = null)
    {
        $data = $this->Articles
            ->find('all')
            ->contain(['Persons']);
        $this->set('data', $data);
    }

    public function addRecord()
    {
        if ($this->request->is('post')) {
            $article = $this->Articles->newEntity($this->request->data);
            $validator = new Validator();
            $validator->email('name');
            $errors = $validator->errors($this->request->data);
            if (!empty($errors)) {
                $this->Flash->error('EMAIL ERROR!!');
            } else {
                if ($this->Articles->save($article)) {
                    $this->redirect(['action' => 'index']);
                }
            }
            $this->set('entity', $article);
        }
    }
}

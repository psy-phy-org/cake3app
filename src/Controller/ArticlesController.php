<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

class ArticlesController extends AppController
{
    public function index($id = null)
    {
        if (!$this->request->is('post')) {
            $connection = ConnectionManager::get('default');
            $data = $connection
                ->execute('SELECT * FROM articles')
                ->fetchAll('assoc');
        } else {
            $input = $this->request->data['input'];
            $connection = ConnectionManager::get('default');
            $data = $connection
                ->execute(
                    'SELECT * FROM articles where id = :id',
                    ['id' => $input]
                )
                ->fetchAll('assoc');
        }
        $this->set('data', $data);
        $this->set('entity', $this->Articles->newEntity());
    }
}

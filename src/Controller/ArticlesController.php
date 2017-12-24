<?php
namespace App\Controller;

use App\Controller\AppController;
use \Exception;

class ArticlesController extends AppController
{
    public function index($id = null)
    {
        $this->set('entity', $this->Articles->newEntity());
        if ($id != null) {
            try {
                $entity = $this->Articles->get($id);
                $this->set('entity', $entity);
            } catch (Exception $e) {
                Log:write('debug', $e->getMessage());
            }
        }
        $data = $this->Articles->find('all')->order(['id' => 'DESC']);
        $this->set('data', $data->toArray());
        $this->set('count', $data->count());
    }

    public function editRecord()
    {
        if ($this->request->is('post')) {
            $arr1 = ['name' => $this->request->data['name']];
            $arr2 = ['title' => $this->request->data['title']];
            $this->Articles->updateAll($arr2, $arr1);
        }
        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;
use \Exception;
use Cake\Log\Log;

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
        if ($this->request->is('put')) {
            try {
                $entity = $this->Articles->get($this->request->data['id']);
                $this->Articles->patchEntity($entity, $this->request->data);
                $this->Articles->save($entity);
            } catch (Exception $e) {
                Log:write('debug', $e->getMessage());
            }
        }
        return $this->redirect(['action' => 'index']);
    }
}

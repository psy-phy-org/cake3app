<?php
namespace App\Controller;

use App\Controller\AppController;
use \Exception;
use Cake\Log\Log;

class ArticlesController extends AppController
{
    public function index()
    {
        $this->set('entity', $this->Articles->newEntity());
        if ($this->request->is('post')) {
            $id = $this->request->data['id'];
            $data = $this->Articles->findByIdOrName($id, $id);
        } else {
            $data = $this->Articles->find('all');
        }
        $this->set('data', $data->toArray());
        $this->set('count', $data->count());
    }

    public function delRecord()
    {
        if ($this->request->is('post')) {
            try {
                $entity = $this->Articles->get($this->request->data['id']);
                $this->Articles->delete($entity);
            } catch (Exception $e) {
                Log::write('debug', $e->getMessage());
            }
            return $this->redirect(['action' => 'index']);
        }
    }
}

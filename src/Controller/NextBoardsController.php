<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NextBoards Controller
 *
 * @property \App\Model\Table\NextBoardsTable $NextBoards
 *
 * @method \App\Model\Entity\NextBoard[] paginate($object = null, array $settings = [])
 */
class NextBoardsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentNextBoards', 'People']
        ];
        $nextBoards = $this->paginate($this->NextBoards);

        $this->set(compact('nextBoards'));
        $this->set('_serialize', ['nextBoards']);
    }

    /**
     * View method
     *
     * @param string|null $id Next Board id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nextBoard = $this->NextBoards->get($id, [
            'contain' => ['ParentNextBoards', 'People', 'ChildNextBoards']
        ]);

        $this->set('nextBoard', $nextBoard);
        $this->set('_serialize', ['nextBoard']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nextBoard = $this->NextBoards->newEntity();
        if ($this->request->is('post')) {
            $nextBoard = $this->NextBoards->patchEntity($nextBoard, $this->request->getData());
            if ($this->NextBoards->save($nextBoard)) {
                $this->Flash->success(__('The next board has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The next board could not be saved. Please, try again.'));
        }
        $parentNextBoards = $this->NextBoards->ParentNextBoards->find('list', ['limit' => 200]);
        $people = $this->NextBoards->People->find('list', ['limit' => 200]);
        $this->set(compact('nextBoard', 'parentNextBoards', 'people'));
        $this->set('_serialize', ['nextBoard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Next Board id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nextBoard = $this->NextBoards->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nextBoard = $this->NextBoards->patchEntity($nextBoard, $this->request->getData());
            if ($this->NextBoards->save($nextBoard)) {
                $this->Flash->success(__('The next board has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The next board could not be saved. Please, try again.'));
        }
        $parentNextBoards = $this->NextBoards->ParentNextBoards->find('list', ['limit' => 200]);
        $people = $this->NextBoards->People->find('list', ['limit' => 200]);
        $this->set(compact('nextBoard', 'parentNextBoards', 'people'));
        $this->set('_serialize', ['nextBoard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Next Board id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nextBoard = $this->NextBoards->get($id);
        if ($this->NextBoards->delete($nextBoard)) {
            $this->Flash->success(__('The next board has been deleted.'));
        } else {
            $this->Flash->error(__('The next board could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;
use Cake\I18n\I18n;
use Cake\Event\Event;

class ArticlesController extends AppController
{
    private $person;
    public $paginate = [
        'limit' => 5,
        'order' => [
            'id' => 'DESC'
        ],
        'contain' => ['Persons']
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        I18n::locale('ja');
    }

    public function initialize()
    {
        parent::initialize();
        $this->person = TableRegistry::get('Persons');
        $this->loadComponent('Paginator');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('DataArray');
    }

    public function index()
    {
        $data = $this->paginate($this->Articles);
        $this->set(compact('data'));
        $this->set('count', $data->count());
    }

    public function add()
    {
        if ($this->request->is('post')) {
            if (!$this->person->checkNameAndPassword($this->request->data)) {
                $this->Flash->error('名前かパスワードが間違っています。');
            } else {
                $res = $this->person->find()
                    ->where(['name' => $this->request->data['name']])
                    ->andWhere(['password' => $this->request->data['password']])
                    ->first();
                $article = $this->Articles->newEntity();
                $article->name = $this->request->data['name'];
                $article->title = $this->request->data['title'];
                $article->content = $this->request->data['content'];
                $article->person_id = $res['id'];
                if ($this->Articles->save($article)) {
                    $this->redirect(['action' => 'index']);
                }
            }
        }
        $this->set('entity', $this->Articles->newEntity());
    }

    public function show($param = 0)
    {
        $data = $this->Articles
            ->find()
            ->where(['Articles.id' => $param])
            ->contain(['Persons'])
            ->first();
        $this->set('data', $data);
    }

    public function show2($param = 0)
    {
        $data = $this->person->get($param);
        $this->set('data', $data);
    }

    public function edit($param = 0)
    {
        if ($this->request->is('put')) {
            $article = $this->Articles
                ->find()
                ->where(['Articles.id' => $param])
                ->contain(['Persons'])
                ->first();
            $article->title = $this->request->data['title'];
            $article->content = $this->request->data['content'];
            $article->person_id = $this->request->data['person_id'];
            if (!$this->person->checkNameAndPassword($this->request->data)) {
                $this->Flash->error('名前かパスワードを確認ください。');
            } else {
                if ($this->Articles->save($article)) {
                    $this->redirect(['action' => 'index']);
                }
            }
        } else {
            $article = $this->Articles
                ->find()
                ->where(['Articles.id' => $param])
                ->contain(['Persons'])
                ->first();
        }
        $this->set('entity', $article);
    }
}

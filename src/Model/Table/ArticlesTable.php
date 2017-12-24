<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        // テーブルクラスが BlogPostsTable という名前の場合テーブルオブジェクトは、
        // クラス名を小文字とアンダースコアー区切りにした blog_posts と名付ける。
        $this->setTable('books');
    }
}

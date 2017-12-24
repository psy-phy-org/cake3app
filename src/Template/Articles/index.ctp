<h1>Articles</h1>
<?= $this->Form->create($entity, ['url' => ['action' => 'addRecord']]) ?>
<fieldset>
<?= $this->Form->label('name', '名前') ?>
<?= $this->Form->text('name') ?>
<?= $this->Form->label('title', 'タイトル') ?>
<?= $this->Form->text('title') ?>
<?= $this->Form->label('content', '内容') ?>
<?= $this->Form->textarea('content') ?>
</fieldset>
<?= $this->Form->button('送信') ?>
<?= $this->Form->end() ?>

<hr>

<table>
<?php foreach ($data as $obj): ?>
  <tr>
    <td><?= $obj->id.': '.$obj->name.'('.$obj->title.')' ?></td>
  </tr>
<?php endforeach; ?>
</table>

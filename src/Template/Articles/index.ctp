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
<thead>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>TITLE</th>
    <th>CONTENT</th>
  </tr>
</thead>
<tbody>
<?php
$arr = $data->toArray();
for ($i=0; $i<count($arr); $i++) {
    echo $this->Html->tableCells(
        $arr[$i]->toArray(),
        ['style' => 'background-color: #f0f0f0'],
        ['style' => 'font-weight: bold'],
        true
    );
}
?>
</tbody>
</table>

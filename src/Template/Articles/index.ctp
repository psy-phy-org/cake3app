<h1>Articles/index</h1>
<p><?= $this->Html->Link('※投稿する', ['action' => 'add']) ?></p>
<div>
<table>
<?=$this->Html->tableHeaders(
    ['投稿者', 'タイトル'],
    ['style'=>'color:#000066; background-color: #AAAAFF'],
    ['style'=>'color:#000066; background-color: #EEEEFF', 'class'=>'something']
); ?>
<?php foreach ($data as $obj): ?>
<?=$this->Html->tableCells(
    [
        $this->Html->link($obj['person']['name'],['action' => 'show2', $obj['person_id']]),
        $this->Html->link($obj['title'], ['action' => 'show', $obj['id']])
    ],
    ['style'=>'color:#000099; background-color: #CCCCFF'],
    ['style'=>'color:#006600; background-color: #EEFFEE'],
 false,
 true
) ?>
<?php endforeach; ?>
</table>
</div>

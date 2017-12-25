<h1><?= __('Articles') ?></h1>
<p><a href="articles/add"><?= __('post') ?></a></p>
<p><?= __('{0} post', $count) ?></p>
<div>
<table>
<?= $this->Html->tableHeaders(
    ['ID', '投稿者', 'タイトル'],
    ['style' => 'color:#000066; background-color: #AAAAFF'],
    ['style' => 'color:#000066; background-color: #EEEEFF', 'class'=>'something']
); ?>
<?php foreach ($data as $obj): ?>
<?= $this->Html->tableCells(
    [
        $obj['id'],
        $this->Html->link($obj['person']['name'], ['action' => 'show2', $obj['person_id']]),
        $this->Html->link($obj['title'], ['action' => 'show', $obj['id']]),
    ],
    ['style' => 'color: #000066; background-color: #CCCCFF'],
    ['style' => 'color: #006600; background-color: #EEFFEE'],
    false,
    true
) ?>
<?php endforeach; ?>
</table>
</div>

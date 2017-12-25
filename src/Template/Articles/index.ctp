<h1><?= __('Articles') ?></h1>
<p><a href="articles/add"><?= __('post') ?></a></p>
<p><?= __('{0} post', $count) ?></p>
<div>
<table>
<tr>
  <th><?= $this->Paginator->sort('id', '投稿者') ?></th>
  <th><?= $this->Paginator->sort('name', '名前') ?></th>
  <th><?= $this->Paginator->sort('title', 'タイトル') ?></th>
</tr>
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
<div class="paginator">
  <ul class="pagination">
  <?= $this->Paginator->numbers(
    [
        'before' => $this->Paginator->hasPrev() ? $this->Paginator->first('<<').'・' : '',
        'after' => $this->Paginator->hasNext() ? '・'. $this->Paginator->last('>>') : '',
        'modulus' => 4,
        'separator' => '・'
    ]
  ) ?>
  </ul>
</div>

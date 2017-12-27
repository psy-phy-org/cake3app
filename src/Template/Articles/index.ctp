<h1><?= $this->RgbText->redString('掲示板') ?></h1>
<p><?= $this->RgbText->greenLink('※投稿する', '/articles/add') ?></a></p>
<p><?= __('{0} post', $count) ?></p>
<div>
<table>
<tr>
  <th>id</th>
  <th>name</th>
  <th>title</th>
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
<?= $this->RgbText->blueLink('トップページに戻る', '/articles') ?>
<?= $this->element('SampleBanner'); ?>

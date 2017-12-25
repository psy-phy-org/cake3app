<h1>Articles/index</h1>
<p><?= $this->Html->Link('※投稿する', ['action' => 'add']) ?></p>
<div>
<table>
  <tr>
    <th width="25%">投稿者</th><th>タイトル</th>
  </tr>
  <?php foreach ($data as $obj): ?>
  <tr>
    <td style="color: #000099; background-color: #DDDDFF">
    <?= $this->Html->link($obj['person']['name'], ['action' => 'show2', $obj['person_id']]) ?>
    </td>
    <td style="color: #000099; background-color: #DDDDFF">
    <?= $this->Html->link($obj['title'],['action' => 'show', $obj['id']]) ?>
    </td>
  </tr>
<?php endforeach; ?>
</table>
</div>

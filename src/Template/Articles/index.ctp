<h1>Articles</h1>
<?= $this->Form->create($entity) ?>
<fieldset>
<?= $this->Form->label('input', '名前 or タイトル or 記事') ?>
<?= $this->Form->text('input') ?>
</fieldset>
<?= $this->Form->button('送信') ?>
<?= $this->Form->end() ?>

<hr>

<table>
<?php foreach ($data as $obj): ?>
  <tr>
    <td><?= $obj->id.': '.$obj->name.'('.$obj->title.')'.$obj->content ?></td>
  </tr>
<?php endforeach; ?>
</table>

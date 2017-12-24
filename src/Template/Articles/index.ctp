<h1>Articles</h1>
<?= $this->Form->create($entity) ?>
<fieldset>
<?= $this->Form->label('input', 'ID') ?>
<?= $this->Form->text('input') ?>
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

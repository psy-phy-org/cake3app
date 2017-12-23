<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<p>フォームの送信</p>
<p>
<?= $result ?>
</p>
<?= $this->Form->create(
    null,
    [
      'type' => 'post',
      'url' => ['action' => 'index']
    ]
) ?>
<?= $this->Form->text('PracticesForm.text1') ?>
<?= $this->Form->submit('送信') ?>
<?= $this->Form->end() ?>

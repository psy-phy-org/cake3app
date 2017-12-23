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
<?= $this->Form->radio(
    'PracticesForm.radio1',
    [
      ['text' => 'Windows', 'value' => 'Windows'],
      ['text' => 'Linux', 'value' => 'Linux'],
      ['text' => 'MacOS', 'value' => 'MacOS']
    ],
    ['label' => true, 'value' => 'Linux']
) ?>
<?= $this->Form->submit('送信') ?>
<?= $this->Form->end() ?>

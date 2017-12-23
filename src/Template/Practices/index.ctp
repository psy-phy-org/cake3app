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
<?= $this->Form->select(
    'PracticesForm.select1',
    [
      ['text' => 'Windows', 'value' => 'Windows'],
      ['text' => 'Linux', 'value' => 'Linux', 'selected' => 'true'],
      ['text' => 'MacOS', 'value' => 'MacOS']
    ],
    ['size' => 4, 'multiple' => true, 'empty' => '項目を選んでください。']
) ?>
<?= $this->Form->submit('送信') ?>
<?= $this->Form->end() ?>

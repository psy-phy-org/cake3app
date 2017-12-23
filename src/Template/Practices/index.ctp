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
      'PC' => [
        ['text' => 'Windows', 'value' => 'Windows'],
        ['text' => 'Linux', 'value' => 'Linux'],
        ['text' => 'MacOS', 'value' => 'MacOS']
      ],
      'mobile' => [
        ['text' => 'Android', 'value' => 'Android'],
        ['text' => 'iPhone', 'value' => 'iPhone'],
        ['text' => 'cellphone', 'value' => 'cellphone']
      ]
    ],
    ['size' => 10, 'multiple' => true, 'empty' => '項目を選んでください。']
) ?>
<?= $this->Form->submit('送信') ?>
<?= $this->Form->end() ?>

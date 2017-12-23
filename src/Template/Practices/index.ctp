<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<p>フォームの送信</p>
<pre>
<?php print_r($result) ?>
</pre>
<?= $this->Form->create(
    null,
    [
      'type' => 'post',
      'url' => ['action' => 'index']
    ]
) ?>
<?= $this->Form->dateTime('PracticesForm.date') ?>
<?= $this->Form->submit('送信') ?>
<?= $this->Form->end() ?>

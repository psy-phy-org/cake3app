<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<?= $this->Form->create() ?>
<fieldset>
  <?= $this->Form->text('name') ?>
  <?= $this->Form->password('password') ?>
</fieldset>
<?= $this->FOrm->button('送信') ?>
<?= $this->Form->end() ?>

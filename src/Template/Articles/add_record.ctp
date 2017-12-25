<style>
.error {color:red; font-size:smaller; font-weight:bold;}
.required {font-size: smaller;}
</style>
<h1>Articles</h1>
<?= $this->Form->create($entity, ['url' => ['action' => 'addRecord']]) ?>
<fieldset>
<div class="error"><?=$this->Form->error('name') ?></div>
<?= $this->Form->input('name', [
    'error' => false,
    'templates' => [
        'label' => 'お名前<span class="required">（必須）</span>'
    ]
]) ?>
<div class="error"><?=$this->Form->error('title') ?></div>
<?= $this->Form->input('title') ?>
<div class="error"><?=$this->Form->error('content') ?></div>
<?= $this->Form->input('content', [
    'error' => false,
]) ?>
</fieldset>
<?= $this->Form->button('送信') ?>
<?= $this->Form->end() ?>

<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<p>
<?php
$this->Html->addCrumb('First', '/one');
$this->Html->addCrumb('Second', '/two');
$this->Html->addCrumb('Last', '/end');
?>
<?= $this->Html->getCrumbs(' | ', 'Top') ?>
</p>

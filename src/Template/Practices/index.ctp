<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<?php $t = time() ?>
<p><?= $this->Time->fromString($t) ?></p>
<p><?= $this->Time->toUnix($t) ?></p>
<p><?= $this->Time->gmt($t) ?></p>

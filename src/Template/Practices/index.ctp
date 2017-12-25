<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<?php $t = '2017-12-10 12:34:56' ?>
<p><?= $this->Time->format($t, 'yyyy年MM月dd日 HH時mm分ss秒') ?></p>
<p><?= $this->Time->nice($t) ?></p>
<p><?= $this->Time->toAtom($t) ?></p>
<p><?= $this->Time->toRSS($t) ?></p>

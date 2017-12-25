<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<?php
$t = time();
?>
<pre>
<?= $this->Time->nice($t) . "について：\n" ?>
<?= $this->Time->isToday($t) ? "今日です\n" : "...\n" ?>
<?= $this->Time->wasYesterDay($t) ? "昨日です" : "...\n" ?>
<?= $this->Time->isTomorrow($t) ? "明日です\n" : "...\n" ?>
<?= $this->Time->isThisWeek($t) ? "今週です\n" : "...\n" ?>
<?= $this->Time->isThisMonth($t) ? "今月です\n" : "...\n" ?>
<?= $this->Time->isThisYear($t) ? "今年です\n" : "...\n" ?>
</pre>

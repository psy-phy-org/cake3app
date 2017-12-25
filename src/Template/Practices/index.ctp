<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<?php
$num = '1234566789';
?>
<p><?= $this->Number->currency($num, 'EUR') ?></p>
<p><?= $this->Number->precision($num, 3) ?></p>
<p><?= $this->Number->toPercentage($num, 1) ?></p>

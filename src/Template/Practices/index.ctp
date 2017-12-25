<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<p>
<?php
$w = '3 years';
$d = '2015-1-1';
echo $this->Time->wasWithinLast($w,$d) ? '今日は'.$d.'から'.$w.'以内です。' : '範囲外！'
?>
</p>

<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<?php
$res = $this->Text->autoLink('please check http://google.co.jp/ .', array());
echo $this->Html->para(null, $res, array());
?>

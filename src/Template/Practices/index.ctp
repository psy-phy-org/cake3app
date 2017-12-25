<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<?php
$str = '<p>please check <a href=\"http://google.co.jp\">http://google.co.jp</a> .</p>';
echo $this->Text->stripLinks($str);
?>

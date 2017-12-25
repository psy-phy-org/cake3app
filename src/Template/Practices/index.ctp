<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<?php
$content = 'this is <b>sample page</b> for cake3app.'
?>
<p><?= $this->Text->excerpt($content, 'page', 10, '***') ?></p>
<p><?= $this->Text->truncate($content, 15, ['ellipsis' => '...?', 'html' => true]) ?></p>

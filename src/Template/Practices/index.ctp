<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<?php
$content = 'テキストの一部をハイライト表示します。';
$hstr = $this->Text->highlight(
    $content,
    'ハイライト表示',
    [
    'format' => '<span class="highlight">\1</span>',
    'html' => true
  ]
);
?>
<?= $this->Html->para('p', $hstr) ?>

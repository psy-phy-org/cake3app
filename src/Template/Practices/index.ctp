<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<?= $this->Html->tag(
    'span',
    h('これはHTMLヘルパーによる<span>タグの出力です。'),
    ['style'=>'color: #006600; font-weight: bold'],
    true
) ?>

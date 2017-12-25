<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<?= $this->Html->div(
    'div-style',
    'これは、&lt;div&gt;タグを自動生成したものです。',
    ['onclick' => 'alert("クリックしました。")']
) ?>

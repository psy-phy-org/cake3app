<h1>Practice</h1>
<p>This is a practice of CakePHP.</p>
<span style="font-weight: bold">
<?= $this->Html->nestedList(
    ['階層化されたリスト' => [
        '最初の項目',
        '次の項目' => ['サブ項目1','サブ項目2'],
        '最後の項目' => ['サブ項目A','サブ項目B']
    ]],
    ['style' => 'font-size: smaller; font-weight: lighter', 'tag' => 'ol'],
    ['style' => 'color: #006600']
) ?>
</span>

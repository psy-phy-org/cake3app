<h1>掲示板</h1>
<p><a href="/cake3app/next-boards/index">※一覧に戻る</a></p>
<pre>
<?php if (!empty($query)) {
    foreach ($query as $key => $val) {
        echo "{$val}[{$key}]\n";
    }
} ?>
</pre>
<p>
<div>※トピック</div>
<table>
<?php
if (!empty($data)) {
    echo "<tr><th>ID</th><th>NAME</th><th>TITLE</th><th>CONTENT</th></tr>";
    foreach ($data as $rec) {
        echo "<tr><td>{$rec->id}</td>";
        echo "<td>{$rec->person->name}</td>";
        echo "<td>{$rec->title}</td>";
        echo "<td>{$rec->content}</td></tr>";
    }
} else {
    echo "<tr><th>※トピックはありません</th></tr>";
}
?>
</table>
</p>
<p>
<div>※トピックへの投稿</div>
<table>
<?php
if (!empty($child)) {
    echo "<tr><th>ID</th><th>NAME</th><th>TITLE</th></tr>";
    foreach ($child as $rec) {
        echo "<tr><td><a href=\"./{$rec->id}\">{$rec->id}</a></td>";
        echo "<td>{$rec->person->name}</td>";
        echo "<td>{$rec->title}</td></tr>";
    }
}
?>
</table>

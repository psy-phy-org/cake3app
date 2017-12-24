<h1>Articles</h1>
<table>
<?php foreach ($data as $obj): ?>
  <tr>
    <td><?= $obj->id.': '.$obj->name ?></td>
  </tr>
<?php endforeach; ?>
</table>

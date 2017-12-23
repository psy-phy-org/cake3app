<h1>Articles</h1>
<table>
<thead>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>TITLE</th>
    <th>CONTENT</th>
  </tr>
</thead>
<tbody>
<?php foreach ($data as $obj): ?>
  <tr>
    <td><?= $obj->id ?></td>
    <td><?= $obj->name ?></td>
    <td><?= $obj->title ?></td>
    <td><?= $obj->content ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

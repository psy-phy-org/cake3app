<h1>Articles/show2</h1>
<p><?= $this->Html->Link('※一覧に戻る', ['action' => 'index']) ?></p>
<table>
  <tr>
    <th width="25%">投稿者</th>
    <td><?= $data['name'] ?></td>
  </tr>
  <tr>
    <th width="25%">コメント</th>
    <td><?= $data['comment'] ?></td>
  </tr>
</table>

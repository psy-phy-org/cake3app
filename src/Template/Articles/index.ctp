<h1><?= $this->RgbText->redString('掲示板') ?></h1>
<p><a href="articles/add"><?= $this->RgbText->greenString('投稿する') ?></a></p>
<div>
<table>
<?php $flg = true ?>
<?php foreach ($marged as $arr): ?>
<?php if ($flg) : ?>
  <tr>
<?php foreach ($arr as $key => $item): ?>
    <th><?= $key ?></th>
<?php endforeach; ?>
  </tr>
<?php $flg = false; ?>
<?php endif; ?>
  <tr>
<?php foreach ($arr as $item): ?>
    <td><?= $item ?></td>
<?php endforeach; ?>
  </tr>
<?php endforeach; ?>
</table>
</div>
<?= $this->RgbText->blueLink('※トップページに戻る', '/') ?></a>
<?= $this->element('sampleBanner') ?>

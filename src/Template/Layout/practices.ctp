<!DOCTYPE html>
<html lang="ja">

<head>
  <?= $this->Html->charset() ?>
  <title>
    <?= $this->fetch('title') ?>
  </title>
  <?php
  echo $this->Html->css('styles');
  echo $this->Html->script('scripts');
  echo $this->fetch('meta');
  echo $this->fetch('css');
  echo $this->fetch('js');
  ?>
</head>

<body>
  <div id="container">
    <div id="header">Header</div>
    <div id="content">
      <?= $this->fetch('content') ?>
    </div>
    <div id="footer">copyright &copy; 20xx Anonymous.</div>
  </div>
</body>
</html>

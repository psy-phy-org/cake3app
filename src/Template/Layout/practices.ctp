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
  <style>
  span.highlight {
  color:white;
  background:blue;
  font-weight:bold;
  }
  </style>
</head>

<body>
  <div id="container">
    <div id="header">
      <?= $this->element('Practices\header', ['msg' => $msg]) ?>
    </div>
    <div id="content">
      <?= $this->fetch('content') ?>
    </div>
    <div id="footer">
      <?= $this->element($footer) ?>
    </div>
  </div>
</body>
</html>

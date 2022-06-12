<?php

/** @var yii\web\View $this */

use app\models\Post;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = 'TРИЗ | рабочий стол';
$postAll = Post::find()->all();
?>


<h1>Статьи</h1>
<ul class="list">
  <?
  foreach ($postAll as $key => $value) {

  ?>
    <li class="post">
      <?= Html::img('@web/img/post/' . $value['image'] . '', []); ?>
      <h2><?= $value['title'] ?></h2>
      <a href=<?= Url::to(['site/fullpost', 'id' => $value['id']]); ?>>Читать</a>
    </li>
  <?  } ?>
</ul>
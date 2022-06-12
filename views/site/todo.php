<?php

use app\models\Todo;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = 'TРИЗ | задачи';
$todoAll = Todo::find()->all();
?>

<h1>Задачи</h1>
<ul class="list">
  <?
  foreach ($todoAll as $key => $value) {

  ?>
    <li class="todo">
      <h2><?= $value['title'] ?></h2>
      <?= Html::img('@web/img/todo/' . $value['image'] . '', ['alt' => 'Удалить', 'class' => 'icon', 'id' => 'arrow']); ?>
      <p><?= $value['text'] ?></p>
    </li>
  <?
    # code...
  } ?>
</ul>
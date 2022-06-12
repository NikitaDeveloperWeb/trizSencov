<?php

/** @var yii\web\View $this */

use app\models\Comments;
use app\models\User;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'ТРИЗ | полная статья';
?>

<div class="fullpost">
  <h1><?= $post['title'] ?></h1>
  <?= Html::img('@web/img/post/' . $post['image'] . '', []); ?>
  <p><?= $post['text'] ?>
  </p>
  <button onclick="window.history.back()" class="button-back">Назад</button>
</div>
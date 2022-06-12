<?php

/** @var yii\web\View $this */

use app\models\Post;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'ТРИЗ | редактировать новость';
?>

<div class="addpost">
  <h1>Редактировать статью</h1>
  <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
  <p>Исправте данные</p>

  <?= $form->field($model, 'title')->textInput(['class' => 'field-main', 'placeholder' => 'Заголовок'])->label('') ?>
  <?= $form->field($model, 'text')->textarea(['class' => 'field-main textarea', 'placeholder' => 'Текст'])->label('') ?>
  <?= $form->field($model, 'image')->fileInput(['class' => 'upload', 'placeholder' => 'Текст'])->label('') ?>
  <button type="submit" class="button-main">Редактировать</button>
  <?php ActiveForm::end(); ?>
</div>
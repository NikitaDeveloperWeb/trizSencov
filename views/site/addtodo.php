<?php

/** @var yii\web\View $this */

use yii\bootstrap4\ActiveForm;

$this->title = 'ТРИЗ | добавить задание';
?>
<h1>Добавить задание</h1>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<p>Введите данные</p>

<?= $form->field($model, 'title')->textInput(['class' => 'field-main', 'placeholder' => 'Заголовок'])->label('') ?>
<?= $form->field($model, 'text')->textarea(['class' => 'field-main textarea', 'placeholder' => 'Текст'])->label('') ?>
<?= $form->field($model, 'image')->fileInput(['class' => 'upload', 'placeholder' => 'Текст'])->label('') ?>
<button type="submit" class="button-main">Добавить</button>
<?php ActiveForm::end(); ?>
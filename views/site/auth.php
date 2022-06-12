<?php

use PharIo\Manifest\Url;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url as HelpersUrl;

$this->title = 'ТРИЗ | Вход'
?>
<div class="forms">
  <a href=<?= HelpersUrl::to(['site/']); ?> title="Теория решени изобретательных задач">
    <?= Html::img('@web/img/triz.png', ['alt' => 'Удалить', 'class' => 'icon', 'id' => 'arrow']); ?>
  </a>
  </a>
  <?php $form = ActiveForm::begin(['options' => ['class' => 'form', 'id' => "form_login"]]); ?>
  <?= $form->field($login_model, 'email')->input('email', ['class' => 'field-main', 'placeholder' => 'Почта'])->label('');  ?>
  <?= $form->field($login_model, 'password')->passwordInput(['class' => 'field-main', 'placeholder' => 'Пароль'])->label(''); ?>
  <button type="submit" class="button-main">Войти</button>
  <?php ActiveForm::end(); ?>

  <?php $form = ActiveForm::begin(['options' => ['class' => 'form', 'id' => 'form-registration'],]) ?>

  <?= $form->field($modelReg, 'firstname')->textInput(['autofocus' => true, 'class' => 'field-main', 'placeholder' => 'Имя'])->label('') ?>
  <?= $form->field($modelReg, 'lastname')->textInput(['class' => 'field-main', 'placeholder' => 'Фамилия'])->label('') ?>
  <?= $form->field($modelReg, 'email')->input('email', ['class' => 'field-main', 'placeholder' => 'Почта'])->label('') ?>
  <?= $form->field($modelReg, 'password')->passwordInput(['class' => 'field-main', 'placeholder' => 'Пароль'])->label('') ?>
  <?= $form->field($modelReg, 'password_repeat')->passwordInput(['class' => 'field-main', 'placeholder' => 'Повторите пароль'])->label('') ?>

  <button type="submit" class="button-main">Зарегистрироваться</button>


  <?php ActiveForm::end(); ?>
  <div class="switch" onclick="changeFormsState()">
    <h3></h3>
  </div>
</div>
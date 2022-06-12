<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
$isAuth = false;

// if (substr($_COOKIE['Auth'], 0, 4) === 'true') {
//   $isAuth = true;
// }
$userData = Yii::$app->user->identity;
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>

<body>
  <?php $this->beginBody() ?>
  <div class="wrapper">
    <header>
      <a href=<?= Url::to(['site/dashbord']); ?> title="Теория решени изобретательных задач">
        <?= Html::img('@web/img/triz.png', ['alt' => 'Удалить', 'class' => 'icon', 'id' => 'arrow']); ?>
        ТРИЗ</a>
      <a href="#"></a>
      <?= Html::beginForm(['/site/logout'], 'post')
        . Html::submitButton(
          Html::img('@web/img/logout.png', ['alt' => 'Удалить', 'class' => 'icon', 'id' => 'arrow']),
          ['class' => '', 'style' => "background: none; border:none;"]
        )
        . Html::endForm() ?>
    </header>
    <div class="wrapper__content">
      <aside>
        <a href=<?= Url::to(['site/dashbord']); ?>>Статьи</a>
        <a href=<?= Url::to(['site/todo']); ?>>Задачи</a>
        <a href=<?= Url::to(['site/triz']); ?>>Что такое ТРИЗ?</a>
        <?php if ($userData && ($userData['typeUser'] === 'Admin')) : ?>
          <a href=<?= Url::to(['site/panel']); ?>>Панель</a>
        <?php endif; ?>
      </aside>
      <main>
        <?= $content ?>
      </main>
    </div>
  </div>


  <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
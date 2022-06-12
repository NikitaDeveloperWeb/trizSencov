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

  <main>
    <?= $content ?>
  </main>



  <?php $this->endBody() ?>
</body>
<script>
  let FORMS_STATE = false;
  let AUTH_FORM = document.querySelector('#form_login');
  let REG_FORM = document.querySelector('#form-registration');
  let Switch = document.querySelector('.switch');

  function setElement(state) {
    if (state === false) {
      Switch.querySelector('h3').innerText = 'Нет аккаунта? Зарегистрироваться.';
      REG_FORM.style.display = 'none';
      AUTH_FORM.style.display = '';
    } else {
      Switch.querySelector('h3').innerText = 'Уже есть аккаунт? Войти.';
      AUTH_FORM.style.display = 'none';
      REG_FORM.style.display = '';
    }
  }
  setElement(FORMS_STATE);

  function setState(state) {
    FORMS_STATE = state;
    setElement(FORMS_STATE);
  }

  const changeFormsState = () => {
    if (FORMS_STATE === false) {
      setState(true);
    } else {
      setState(false);
    }
  };
</script>

</html>
<?php $this->endPage() ?>
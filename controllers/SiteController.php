<?php

namespace app\controllers;

use app\models\AddComments;
use app\models\AddPost;
use app\models\AddTodo;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Login;
use app\models\Post;
use app\models\SignUp;
use app\models\Todo;
use app\models\UpdatePost;
use app\models\UpdateTodo;
use app\models\UpdateUser;
use app\models\User;
use yii\web\UploadedFile;

class SiteController extends Controller
{
  /**
   * {@inheritdoc}
   */
  public function behaviors()
  {
    return [
      'access' => [
        'class' => AccessControl::className(),
        'only' => ['logout'],
        'rules' => [
          [
            'actions' => ['logout'],
            'allow' => true,
            'roles' => ['@'],
          ],
        ],
      ],
      'verbs' => [
        'class' => VerbFilter::className(),
        'actions' => [
          'logout' => ['post'],
        ],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function actions()
  {
    return [
      'error' => [
        'class' => 'yii\web\ErrorAction',
      ],
      'captcha' => [
        'class' => 'yii\captcha\CaptchaAction',
        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
      ],
    ];
  }

  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionIndex()
  {
    $this->layout = 'pageslayout';
    return $this->render('index');
  }
  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionAuth()
  {
    $this->layout = 'loginLayout';
    $modelReg = new SignUp();
    $modelReg->typeUser = 'User';
    if (isset($_POST['Signup'])) {
      $modelReg->attributes = Yii::$app->request->post('Signup');
    }
    if ($modelReg->validate() &&  $modelReg->signup()) {
      return $this->redirect('index');
    }
    // auth
    if (!Yii::$app->user->isGuest) {
      if (Yii::$app->user->identity['typeUser'] === 'Admin') {
        return $this->redirect(['site/admin']);
      } else {
        return $this->redirect(['site/dashbord']);
      }
    }
    $login_model = new Login();
    if (Yii::$app->request->post('Login')) {
      $login_model->attributes = Yii::$app->request->post('Login');
      if ($login_model->validate()) {
        setcookie("Auth", "true");
        Yii::$app->user->login($login_model->getUser());
        return $this->redirect(['site/dashbord']);
      }
    }
    return $this->render('auth', ['modelReg' => $modelReg, 'login_model' => $login_model]);
  }


  /**
   * Logout action.
   *
   * @return Response
   */
  public function actionLogout()
  {
    Yii::$app->user->logout();
    setcookie("Auth", "");
    return $this->redirect(['/site/index']);
  }

  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionDashbord()
  {
    return $this->render('dashbord');
  }
  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionAddpost()
  {
    $model = new AddPost();

    if (Yii::$app->request->isPost) {
      $model->load(Yii::$app->request->post());
      $model->image = UploadedFile::getInstance($model, 'image');
      if ($model->image = UploadedFile::getInstance($model, 'image')) {
        $model->image->saveAs("img/post/{$model->image->baseName}.{$model->image->extension}");
        $model->Add();
        return $this->redirect(['site/panel ']);
      }
    }
    return $this->render('addpost', ['model' => $model]);
  }
  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionAddtodo()
  {
    $model = new AddTodo();

    if (Yii::$app->request->isPost) {
      $model->load(Yii::$app->request->post());
      $model->image = UploadedFile::getInstance($model, 'image');
      if ($model->image = UploadedFile::getInstance($model, 'image')) {
        $model->image->saveAs("img/todo/{$model->image->baseName}.{$model->image->extension}");
        $model->Add();
        return $this->redirect(['site/panel ']);
      }
    }
    return $this->render('addtodo', ['model' => $model]);
  }
  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionPanel()
  {
    return $this->render('panel');
  }
  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionEditpost($id)
  {
    $post = Post::findOne($id);
    $model = new UpdatePost($post);

    if (Yii::$app->request->isPost) {
      $model->load(Yii::$app->request->post());
      $model->image = UploadedFile::getInstance($model, 'image');
      if ($model->image = UploadedFile::getInstance($model, 'image')) {
        $model->image->saveAs("img/post/{$model->image->baseName}.{$model->image->extension}");
        $model->update();
        return $this->redirect(['site/panel']);
      }
    }
    return $this->render('editpost', ['model' => $model, 'idPost' => $id]);
  }
  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionEdittodo($id)
  {
    $todo = Todo::findOne($id);
    $model = new UpdateTodo($todo);

    if (Yii::$app->request->isPost) {
      $model->load(Yii::$app->request->post());
      $model->image = UploadedFile::getInstance($model, 'image');
      if ($model->image = UploadedFile::getInstance($model, 'image')) {
        $model->image->saveAs("img/todo/{$model->image->baseName}.{$model->image->extension}");
        $model->update();
        return $this->redirect(['site/panel']);
      }
    }
    return $this->render('edittodo', ['model' => $model, 'idTodo' => $id]);
  }
  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionPostdelete($id)
  {
    $model = Post::findOne($id);
    if ($model) {
      $model->delete();
    }
    return $this->redirect(['site/panel']);
  }
  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionTododelete($id)
  {
    $model = Todo::findOne($id);
    if ($model) {
      $model->delete();
    }
    return $this->redirect(['site/panel']);
  }
  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionFullpost($id)
  {
    $post = Post::findOne($id);

    return $this->render('fullpost', ['post' => $post]);
  }
  /**
   * @return User the loaded model
   */
  private function findUser()
  {
    return User::findOne(Yii::$app->user->identity->getId());
  }
  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionTodo()

  {
    return $this->render('todo');
  }
  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionTriz()

  {
    return $this->render('triz');
  }

  /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionSearch($title)
  {
    $post = Post::find()->where(['title' => $title])->one();
    if (isset($post)) {
      return $this->render('search', ['post' => $post]);
    } else {
      return $this->render('dashbord');
    }
  }
}

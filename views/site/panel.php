<?php

/** @var yii\web\View $this */

use app\models\Post;
use app\models\Todo;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = 'ТРИЗ | админпанель';
$userData = Yii::$app->user->identity;
$postAll = Post::find()->all();
$todoAll = Todo::find()->all() ?>

<h1>Административная панель</h1>
<div class="pult">
  <h2>Статьи</h2> <button onclick="setPost()">Открыть</button>
</div>
<table id="post">

  <a href=<?= Url::to(['site/addpost',]); ?>>Добавить статью</a>
  <?
  foreach ($postAll as $key => $value) {

  ?>
    <tr>
      <td><strong>ID:</strong><?= $value['id'] ?></td>
      <td><strong>Изображение:</strong><?= Html::img('@web/img/post/' . $value['image'] . '', ['alt' => 'Удалить', 'class' => 'icon', 'id' => 'arrow']); ?></td>
      </td>
      <td><strong>Заголовок:</strong><?= $value['title'] ?></td>
      <td><strong>Текст:</strong><?= $value['text'] ?></td>
      <td><strong>Действия</strong>
        <a href=<?= Url::to(['site/editpost', 'id' => $value['id']]); ?>>Редактировать</a>
        <a href=<?= Url::to(['site/postdelete', 'id' => $value['id']]); ?>>Удалить</a>
      </td>
    </tr>
  <?    # code...
  } ?>
</table>

<!--  -->

<div class="pult">
  <h2>Задачи</h2> <button onclick="setTodo()">Открыть</button>
</div>
<table id="todo">

  <a href=<?= Url::to(['site/addtodo',]); ?>>Добавить задание</a>
  <?
  foreach ($todoAll as $key => $value) {

  ?>
    <tr>
      <td><strong>ID:</strong><?= $value['id'] ?></td>
      <td><strong>Изображение:</strong><?= Html::img('@web/img/todo/' . $value['image'] . '', ['alt' => 'Удалить', 'class' => 'icon', 'id' => 'arrow']); ?></td>
      <td><strong>Название задачи:</strong><?= $value['title'] ?></td>
      <td><strong>Текст:</strong><?= $value['text'] ?></td>
      <td><strong>Действия</strong>
        <a href=<?= Url::to(['site/edittodo', 'id' => $value['id']]); ?>>Редактировать</a>
        <a href=<?= Url::to(['site/tododelete', 'id' => $value['id']]); ?>>Удалить</a>
      </td>
    </tr>
  <?
  } ?>

</table>

<script>
  let list_post = document.querySelector('#post');
  let list_todo = document.querySelector('#todo');
  let statePost = false;
  let stateTodo = false;

  function setElementPost(state) {
    if (state) {
      list_post.style.display = '';
    } else {
      list_post.style.display = 'none';
    }

  }

  function setElementTodo(state) {
    if (state) {
      list_todo.style.display = '';
    } else {
      list_todo.style.display = 'none';
    }

  }
  setElementPost(statePost);
  setElementTodo(stateTodo);

  function setStatePost() {
    if (statePost) {
      statePost = false;
    } else {
      statePost = true;
    }

    setElementPost(statePost);
  }

  function setStateTodo() {
    if (stateTodo) {
      stateTodo = false;
    } else {
      stateTodo = true;
    }

    setElementTodo(stateTodo);
  }

  function setPost() {
    setStatePost();
  }

  function setTodo() {
    setStateTodo();
  }
</script>
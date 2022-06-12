<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = 'ТРИЗ | главная';
?>
<div class="wrapper mainPage">
  <header>
    <a href=<?= Url::to(['site/']); ?> title="Теория решени изобретательных задач">
      <?= Html::img('@web/img/triz.png', ['alt' => 'Удалить', 'class' => 'icon', 'id' => 'arrow']); ?>
      ТРИЗ</a>
    <?= Html::img('@web/img/logoZtt.png', ['alt' => 'Удалить', 'class' => 'ztt', 'id' => 'arrow']); ?>
    <a href=<?= Url::to(['site/auth']); ?> title="Теория решени изобретательных задач">
      Авторизация</a>
  </header>
  <h1 style="margin-bottom: 10px;">Наши команды</h1>
  <ul id="slides">
    <li class="slide showing"> <?= Html::img('@web/img/slider/sl4.jpg', ['alt' => 'Удалить', 'class' => 'icon', 'id' => 'arrow']); ?></li>
    <li class="slide"> <?= Html::img('@web/img/slider/sl2.jpg', ['alt' => 'Удалить', 'class' => 'icon', 'id' => 'arrow']); ?></li>
    <li class="slide"> <?= Html::img('@web/img/slider/sl3.jpg', ['alt' => 'Удалить', 'class' => 'icon', 'id' => 'arrow']); ?></li>
    <li class="slide"> <?= Html::img('@web/img/slider/sl4.jpg', ['alt' => 'Удалить', 'class' => 'icon', 'id' => 'arrow']); ?></li>
    <li class="slide"> <?= Html::img('@web/img/slider/sl5.jpg', ['alt' => 'Удалить', 'class' => 'icon', 'id' => 'arrow']); ?></li>
  </ul>
  <!-- Кнопки для перехода к предыдущему и следующему слайду -->
  <a href="#" class="slider__control" data-slide="prev"></a>
  <a href="#" class="slider__control" data-slide="next"></a>
</div>
<div class="wrapper__img">
  <img src="https://i.ytimg.com/vi/SUABF_gtJU0/maxresdefault.jpg" alt="">
  <h2>ТРИЗ как метод развития творческого мышления.</h2>
</div>
<h1>Теория решения изобретательских задач ― одна из самых противоречивых методик. Кто-то активно внедряет в свои проекты, а кто-то не может понять, что это такое и как это работает, ― разбираемся.</h1>
<div class="info_one">
  <h2>Откуда взялась ТРИЗ</h2>
  <p>В 1946 году советский инженер, учёный и писатель-фантаст Генрих Альтшуллер начал изучать приёмы решения задач, чаще всего используемые изобретателями. Всего он выделил 40 приёмов, которые назвал теорией решения изобретательских задач.

    Он пришёл к выводу, что решение технической задачи приводит к моменту, когда ответа на вопрос ещё нет, а вариантов много. В такой ситуации оказывается каждый изобретатель. Также Альтшуллер заключил, что самое эффективное решение задачи достигается при помощи ресурсов (материальных, временных, пространственных, человеческих и так далее), которые у вас уже есть. Тогда ответ станет очевидным.

    В 80-х годах эту теорию брали за основу методики преподавания в советских школах и использовали на заводах. Но позже эта практика забылась.</p>
  <img src="https://netology.ru/blog/wp-content/uploads/2020/06/image5-1.jpg" alt="">
  <p>Сегодня ТРИЗ имеет широкое признание во всем мире. Ведущие производственные компании используют методы и инструменты ТРИЗ в своей работе — Samsung, LG, Gillette, HP, Intel, Boeing, Xerox, Ford, Toyota, Kodak, Johnson&Johnson и другие.

    Каждый год проходят всемирные конференции ТРИЗ, активно ведут свою деятельность Международная, Азиатская и Европейская ассоциации ТРИЗ. В 1998 году в США открылся Институт Альтшуллера для обучения инженеров и менеджеров.</p>
</div>
<div class="info_one">
  <h2>Как появилась ТРИЗ и как она попала из СССР на Запад</h2>
  <p>Теорию решения изобретательских задач создал советский изобретатель и писатель-фантаст Генрих Альтшуллер. Он начал работать над ней в 1946 году, а к 1970-му окончательно описал основные методики и инструменты ТРИЗ.</p>
  <img src="https://skillbox.ru/upload/setka_images/06483915042022_accf102caaa970ce65d217b9ae9a8e9a57caa67c.jpg" alt="">
  <p>Откуда Альтшуллер взял идеи для ТРИЗ? Он изучал, как инженеры разрабатывают технические решения. Прежде чем прийти к своим выводам, Альтшуллер проанализировал материалы к нескольким тысячам патентов. Так он создал один из самых известных инструментов ТРИЗ — 40 изобретательских приёмов для устранения технических противоречий.

    К концу 1970-х школы ТРИЗ появились во многих городах СССР. Регулярно проходили семинары и конференции, в том числе всесоюзные. В 1989 году создали первую ассоциацию ТРИЗ, а в 1999 году появилось международное объединение — МАТРИЗ. Ассоциация работает и сейчас, вот ссылка на её сайт.

    В США и Европу ТРИЗ попала вместе со специалистами, которые эмигрировали из СССР в 1991 году. Там они популяризировали эту теорию. В 1998 году в США открылся The Altshuller Institute — Институт Альтшуллера, в котором обучали инженеров и менеджеров.

    Позже появились другие организации, работающие с ТРИЗ. Например, IBTA — International Business TRIZ Association. Есть консалтинговые компании, работающие по методикам этой теории, — например, индийская TRIZ Asia. Международные ассоциации проводят ежегодные конференции — TRIZfest, TRIZ Future, TRIZCON, «ТРИЗ Саммит», TRIZ for X и другие.</p>
</div>
</div>
<footer>
  <?= Html::img('@web/img/logoZtt.png', ['alt' => 'Удалить', 'class' => 'ztt', 'id' => 'arrow']); ?>
  <h2>ГБОУ ПОО "Златоустовский техникум технологий и экономики" 2022г.</h2>
</footer>
<script>
  var slides = document.querySelectorAll('#slides .slide');
  var currentSlide = 0;
  var slideInterval = setInterval(nextSlide, 2000);

  function nextSlide() {
    slides[currentSlide].className = 'slide';
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].className = 'slide showing';
  }
</script>
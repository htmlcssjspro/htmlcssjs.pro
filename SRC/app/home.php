<!DOCTYPE html>
<!--
  * Date: 02.2020
  * Автор: Сергей Тарасов aka MILITER
  * Author: Sergei Tarasov aka MILITER
  * Web-site: https://htmlcssjs.pro
  * E-mail: master@htmlcssjs.pro
  * Telegram: @htmlcssjspro
-->
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>htmlcssjs.pro</title>
  <meta name="description" content="htmlcssjs.pro">

  <meta name="author" content="Sergei Tarasov aka MILITER https://htmlcssjs.pro">

  <link rel="stylesheet" href="./css/style.min.css">
</head>

<body>

  <section id="intro" class="intro">
    <div class="intro__overlay">
      <h1 class="intro__title">
        <span class="title_sup">title_sup</span>
        <span class="title_main">title_main</span>
        <span class="title_sub">title_sub</span>
      </h1>
      <button class="intro__btn">intro__btn</button>
      <span class="arrow"></span>
    </div>

  </section>


  <div class="bg"></div>


  <header class="header">

    <section class="header__top">
      <div class="header__logo"></div>
      <div class="header__title"><span>htmlcssjs.pro</span></div>
      <section class="header__contacts">
        <!-- <a class="phone" href="tel:+79149705050">+7 914 970 50 50</a> -->
        <a class="telegram" href="tg://resolve?domain=htmlcssjspro">@htmlcssjspro</a>
      </section>
      <button class="header__btn">header__btn</button>
    </section>

    <section class="header__bottom">
      <span class="header__info">создание сайтов</span>

      <nav class="header__nav nav_hor">
        <a href="#examples">examples</a>
        <a href="#price">price</a>
        <a href="#section3">section3</a>
        <a href="#section4">section4</a>
        <a href="#section5">section5</a>
      </nav>
    </section>

  </header>


  <main class="main">
    <!-- <div class="main__wrap"> -->

    <section id="examples" class="examples">
      <span>examples</span>
      <span>примеры готовых сайтов</span>
      <div class="examples_wrap">
        <div class="example1">example1</div>
        <div class="example2">example2</div>
        <div class="example3">example3</div>
      </div>
    </section>

    <section id="price" class="price tabs">
      <h2>tabs</h2>

      <div class="tabs__img">
        <div class="tabs__img_img-1 active">
          <span class="tabs__img_title">IMG-1</span>
        </div>
        <div class="tabs__img_img-2">
          <span class="tabs__img_title">IMG-2</span>
        </div>
        <div class="tabs__img_img-3">
          <span class="tabs__img_title">IMG-3</span>
        </div>
        <div class="tabs__img_img-4">
          <span class="tabs__img_title">IMG-4</span>
        </div>
        <div class="tabs__img_img-5">
          <span class="tabs__img_title">IMG-5</span>
        </div>
      </div>

      <div class="tabs__nav_wrap">
        <span id="tabs__nav_mob" class="tabs__nav_mob">menu-mob</span>
        <nav class="tabs__nav">
          <a class="tabs__link active" href="tab-1" data-img="img-1" data-content="content-1">tab-1</a>
          <a class="tabs__link" href="tab-2" data-img="img-2" data-content="content-2">tab-2</a>
          <a class="tabs__link" href="tab-3" data-img="img-3" data-content="content-3">tab-3</a>
          <a class="tabs__link" href="tab-4" data-img="img-4" data-content="content-4">tab-4</a>
          <a class="tabs__link" href="tab-5" data-img="img-5" data-content="content-5">tab-5</a>
        </nav>
      </div>

      <div class="tabs__content">
        <section class="tabs__content_content-1 active">
          <a href="content-1">Content-1</a>
        </section>

        <section class="tabs__content_content-2">
          <a href="content-2">Content-2</a>
        </section>

        <section class="tabs__content_content-3">
          <a href="content-3">Content-3</a>
        </section>

        <section class="tabs__content_content-4">
          <a href="content-4">Content-4</a>
        </section>

        <section class="tabs__content_content-5">
          <a href="content-5">Content-5</a>
        </section>
      </div>

    </section>


    <section id="section3" class="section3">
      <span>section3</span>
    </section>
    <section id="section4" class="section4">
      <span>section4</span>
    </section>
    <section id="section5" class="section5">
      <span>section5</span>
    </section>
    <!-- </div> -->
    <!-- /main__wrap -->
  </main>


  <aside class="aside">
    <div class="aside__wrap">
      <span>aside</span>
    </div>
    <!-- /aside__wrap -->
  </aside>


  <footer class="footer">
    <div class="footer__wrap">
      <span>footer</span>
    </div>
    <!-- /footer__wrap -->
  </footer>


  <script src="js/script.min.js"></script>

</body>

</html>

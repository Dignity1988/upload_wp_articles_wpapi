<?php
wp_head();
get_header();


get_footer();

?>
<!DOCTYPE html>
<html lang="en">

  

<body>
  <div class="grid-responsive" id="root">
    <div class="grid-responsive__container">
      <header class="header grid-responsive__column grid-responsive__column__col-13 header_mobile-hidden" id="header">
        <div class="header header__logo grid-responsive__column grid-responsive__column__col-2 "><img class="header__logo header__logo-img" src="/img/logo_.png" alt=""></div>
        <div class="header header__slogan grid-responsive__column grid-responsive__column__col-8">
          <div class="header__slogan grid-responsive__row">
            <h1>Сайт белого ворона</h1></div>
          <div class="header__slogan grid-responsive__column">
            <h4>возможность быть самим собой</h4></div>
        </div>
        <div class="header header__social header grid-responsive__column grid-responsive__column__col-3">
          <div class="grid-responsive__column">
            <div class="header__social-networks">
              <a class="header__social-network header__social-fb"></a><a class="header__social-network header__social-in"></a>
              <a class="header__social-network header__social-yt"></a><a class="header__social-network header__social-vb"></a>
            </div>
          </div>
          <div class="header__social__contacts ">
            <address><strong><a class="header__social-contacts_mts">050-123-123-123</a></strong></address>
            <address><strong><a class="header__social-contacts_star">063-000-00-00</a></strong></address>
          </div>
        </div>
      </header>

      <aside id="aside" class="sidebar grid-responsive__column grid-responsive__column__col-3">



        <ul id="main_menu" class="sidebar-main__menu">
          <li class="sidebar-main__menu_mobile mobile_link">
            <div class="grid-responsive__row">
              <div class="link-hidden">
                <img class="mobile_link-img header_logo-img" src="/img/logo_.png" alt="">
                <span class="mobile_link-slogan"><h1>Сайт белого ворона</h1><h4>возможность быть самим собой</h4></span>
              </div>
              <div id="mobile"><a>&#9776;</a></div>
            </div>
          </li>
          <li class="sidebar-main_menu__link social-networks ">
            <a class="social-network header__social-fb"></a><a class="social-network header__social-in"></a>
            <a class="social-network header__social-yt"></a><a class="social-network header__social-vb"></a>
          </li>
          <li class="sidebar-main_menu__link sidebar-main_menu__link__active hidden"><a href="">Главная</a></li>
          <li class="sidebar-main_menu__link"><a href="">Галлерея</a></li>
          <li class="sidebar-main_menu__link"><a href="">Отчеты</a></li>
          <li class="sidebar-main_menu__link"><a href="">О нас</a></li>
          <div class="sidebar-main__banner">
            <img class="sidebar-main__banner__img img__responsive" src="/img/1.jpg" alt="">
            <div class="sidebar-main_banner__mask">
              <strong>
TV show
</strong>
              <p>some info</p>
            </div>
          </div>
        </ul>

      </aside>
      <main id="main" class="main grid-responsive__column grid-responsive__column__col-10">
        <hr class="main__hr">
        <section class="grid-responsive__row main__slider">
          <ul class "slider slider__slides" id="slides">
            <li class="slide slide__showing"><img class="slide_img img__responsive" src="/img/1.jpg" alt="">
              <div class="slide__mask mask-text">
                <h6>text to show<br>text excerept</h6></div>
            </li>
            <li class="slide"><img class="slide_img img__responsive" src="/img/1.jpg" alt="">
              <div class="slide__mask mask-text">
                <h6>text to show<br>text excerept</h6></div>
            </li>
            <li class="slide"><img class="slide_img img__responsive" src="/img/2.jpg" alt="">
              <div class="slide__mask mask-text">
                <h6>text to show<br>text excerept</h6></div>
            </li>
            <li class="slide"><img class="slide_img img__responsive" src="/img/3.jpg" alt="">
              <div class="slide__mask mask-text">
                <h6>text to show<br>text excerept</h6></div>
            </li>
          </ul>
        </section>
        <section class="grid-responsive__row article__trip">

          <div class="grid-responsive__column__col-7"><img class="article__img  img_responsive" src="/img/1.jpg"></div>
          <div class="grid-responsive__column__col-6">
            <h6 class="article__title"><date>12/09/2018</date><span class="article__title article__title-meta">Кавказ 2000км</span>
</h6>
            <p class="article">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<a href="#">читать далее</a>
            </p>
            <button class="article__button button__square-more">Хочу</button>
          </div>
        </section>
        <section class="grid-responsive__row article__review">
          <div class="grid-responsive__column__col-7"><img class="article__img img_responsive" src="/img/1.jpg">
            <div class=" article__review mask-text">
              <h6>text to show<br>text excerept</h6></div>
          </div>
          <div class="grid-responsive__column__col-6">
            <h6 class="article__title"><date class="article__title-date">12/09/2018</date><span class="article__meta">Кавказ 2000км</span>
</h6>
            <p class="article">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<a href="#">читать далее</a>
            </p>
            <button class="article__button button__square-more">Хочу</button>
          </div>
        </section>
        <section>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit eveniet dignissimos fugiat ducimus veniam optio beatae ratione ab, quis commodi, dolorem suscipit officiis alias architecto consectetur, sequi totam. Recusandae, accusantium.</p>
        </section>
      </main>

    </div>
    <div id="helper_footer"></div>
  </div>
  <footer class="grid-responsive" id="footer ">
    <div class="prefooter grid-responsive grid-responsive__column" id="prefooter">
      <div class="grid-responsive__column grid-responsive__column__col-1"></div>
      <div class="grid-responsive__column grid-responsive__column__col-4"><q class="quote">"Ты идёшь по кромке ледника,
Взгляд не отрывая от вершины.
Горы спят, вдыхая облака,
Выдыхая снежные лавины."<br>
<b class="quote__author">В.Высоцкий</b>
</q>
      </div>
      <div class="grid-responsive__column__col-3">
        <p><img src="/img/2.jpg" alt=""></p>
      </div>
      <div class="grid-responsive__column grid-responsive__column__col-4"><button class="button button__square-more" onclick="form_function()">Связаться с нами</button></div>
    </div>
    <div class="footer grid-responsive grid-responsive__column" id="copyright">
      <p>copiright<strong>&copy;</strong></p>
    </div>
  </footer>
  <!-- BEGIN JIVOSITE CODE -->
  <script src='https://code.jivosite.com/script/widget/BTTfycsq3A' type='text/javascript'></script>
  <script type='text/javascript'>
    (function() {
      var widget_id = 'BTTfycsq3A';
      var d = document;
      var w = window;

      function l() {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = "https://code.jivosite.com/script/widget/BTTfycsq3A";
        var ss = document.getElementsByTagName('script')[0];
        ss.parentNode.insertBefore(s, ss);
      }
      if (d.readyState == 'complete') {
        l();
      } else {
        if (w.attachEvent) {
          w.attachEvent('onload', l);
        } else {
          w.addEventListener('load', l, false);
        }
      }
    })();
  </script>
  <!-- END JIVOSITE CODE -->
</body>
<!-- Slider JS -->
<script>
  var slides = document.querySelectorAll('#slides .slide');
  var currentSlide = 0;
  var slideInterval = setInterval(nextSlide, 5000);

  function nextSlide() {
    slides[currentSlide].className = 'slide';
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].className = 'slide__showing';
  }
</script>
<!-- fixed menu js  -->
<script>
  window.addEventListener('scroll', function() {
    var m = document.getElementById("main_menu");
    var k = document.getElementById("header");
    s = k.offsetHeight;
    var a = document.documentElement;
    var body = document.body;
    var scrollTop = a.scrollTop || body && body.scrollTop || 0;
    scrollTop -= a.clientTop;
    if (scrollTop >= s) {
      m.classList.add('fixed');
    } else if (scrollTop < s) {
      m.classList.remove('fixed');
    }
  }, true)
</script>
<!--end fixed menu js  -->
<!-- mobile menu-->
<script>
  document.getElementById("mobile").addEventListener('click', function mobile() {
    var icon = document.querySelector('#main_menu');
    icon.classList.toggle('mobile-hidden');
  })
</script>
<!--end mobile menu-->

</html>

<?php

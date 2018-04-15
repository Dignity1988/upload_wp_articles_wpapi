<?php
?>
<header class="header grid-responsive__column grid-responsive__column__col-13 header_mobile-hidden" id="header">
  <div class="header header__logo grid-responsive__column grid-responsive__column__col-2 ">
    <?php

    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }

?>
   </div>
  <div class="header header__slogan grid-responsive__column grid-responsive__column__col-8">
    <div class="header__slogan grid-responsive__row">
      <h1>Сайт белого ворона</h1></div>
    <div class="header__slogan grid-responsive__column">
      <h4>возможность быть самим собой</h4></div>
  </div>
  <div class="header header__social header grid-responsive__column grid-responsive__column__col-3">
    <?php dynamic_sidebar("social"); ?>
  
  </div>
</header>
<?php

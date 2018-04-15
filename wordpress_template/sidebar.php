  <?php ?><aside id="aside" class="sidebar grid-responsive__column grid-responsive__column__col-3">

        <ul id="main_menu" class="sidebar-main__menu">
          <li class="sidebar-main__menu_mobile mobile_link">
            <div class="grid-responsive__row">
              <div class="link-hidden">
                <div class="mobile_link-img header_logo-img">

                </div>
                <span class="mobile_link-slogan"><h1>Сайт белого ворона</h1><h4>возможность быть самим собой</h4></span>
              </div>
              <div id="mobile"><a>&#9776;</a></div>
            </div>
          </li>
          <li class="sidebar-main_menu__link social-networks ">
            <?php if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }?>
            <div class="social-network_links">
            <a class="social-network header__social-fb"></a><a class="social-network header__social-in"></a>
            <a class="social-network header__social-yt"></a><a class="social-network header__social-vb"></a>
            </div>
          </li>
            <?php wp_nav_menu(array('items_wrap'=> '%3$s', 'walker' => new NavMenuWalker(), 'container'=>false, 'menu_class' => '', 'theme_location'=>'main', 'fallback_cb'=>false ));?>
        </ul>


            <?php  dynamic_sidebar('banner'); ?>


      </aside>
     <?php

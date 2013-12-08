<div class="contain-to-grid">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name"></li>
      <li class="toggle-topbar menu-icon"><a href=""><span>Menu</span></a></li>
    </ul>
    <section class="top-bar-section">
      <ul class="right">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </ul>
    </section>
  </nav>
</div>
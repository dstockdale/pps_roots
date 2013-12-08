<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
  <div class="root">
    <!--[if lt IE 8]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
      </div>
    <![endif]-->

    <?php
      do_action('get_header');
      // Use Bootstrap's navbar if enabled in config.php
      if (current_theme_supports('bootstrap-top-navbar')) {
        get_template_part('templates/header-top-navbar');
      } else {
        get_template_part('templates/header');
      }
    ?>

    <div class="doc-header">
      <div class="row">
        <div class="large-12 columns">
          <h1 class="site-name"><a href="/#home">PRO <span class="silver">PRODUCTION</span> SOLUTIONS</a></h1>
        </div>
      </div>
    </div>

    <div class="wrap" role="document">
      <div class="row">
        <div class="large-10 large-offset-1 columns">
          <div class="row container">
            <main class="main <?php echo roots_main_class(); ?>" role="main">
              <?php include roots_template_path(); ?>
            </main><!-- /.main -->
            <?php if (roots_display_sidebar()) : ?>
              <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
                <?php include roots_sidebar_path(); ?>
              </aside><!-- /.sidebar -->
            <?php endif; ?>
          </div>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <div class="root-footer"></div>
  </div>
  <?php get_template_part('templates/footer'); ?>

</body>
</html>

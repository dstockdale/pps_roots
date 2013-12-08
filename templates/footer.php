<footer class="footer footer-sticky" role="contentinfo">
<!--   <div class="down show-for-medium-up"><a href="#down">More</a></div>
 -->
  <div class="row">
    <div class="medium-4 medium-4 push-8 columns">
      <ul class="socials">
        <li><a href="http://www.twitter.com/valerietolosa" class="tweet-it"></a></li>
        <li><a href="http://www.facebook.com/ProProductionSolutions" class="face-it"></a></li>
        <li><a href="/contact" class="email-it"></a></li>
      </ul>
     </div>
     <div class="medium-8 medium-8 pull-4 columns">
        <a href="http://www.valerietolosa.com" class="vt-logo regular" target="_blank">Valerie Tolosa</a>
        <?php
          if (has_nav_menu('footer_navigation')) :
            wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'pps-links'));
          endif;
        ?>
       <p class="copyright">© PPS <?php echo date("Y"); ?>. All rights reserved.</p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
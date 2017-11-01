  <?php global $img_folder; ?>
  <footer class="pri-footer">

  <div class="pri-footer__association pri-footer__col">
    <a href="https://studieverenigingid.nl/" target="_blank">
      <picture>
        <source srcset="<?=$img_folder?>logo.svg" type="image/svg+xml">
          <img class="pri-footer__logo" alt="Study association i.d"
          srcset="<?=$img_folder?>logo.png 1x,
          <?=$img_folder?>logo@2x.png 2x"
          src="<?=$img_folder?>logo.png">
      </picture>
    </a>
    <p class="pri-footer__paragraph">
      <strong class="pri-footer__name"><?php echo esc_attr_x('Study association i.d', 'Company Name', 'svid-theme-domain');?></strong><br>
      Landbergstraat 15<br>
      2628 CE Delft<br>
      <?php echo esc_attr_x('Netherlands', 'Netherlands in footer', 'svid-theme-domain');?><br>
      <a class="pri-footer__link"
      href="tel:0031152783012">+31 (0) 15 278 3012</a><br>
      <a class="pri-footer__link"
      href="mailto:svid@tudelft.nl">svid@tudelft.nl</a><br>
    </p>
  </div>

  <div class="pri-footer__sitemap pri-footer__col">
    <h2 class="pri-footer__heading">Sitemap</h2>
    <?php wp_nav_menu( array(
      'theme_location' => 'sitemap',
      'container' => 'nav',
      'container_class' => 'sitemap',
      'menu_class' => 'sitemap__list',
      'walker' => new Walker_Sitemap() ) ); ?>
  </div>

  <div class="pri-footer__paragraph pri-footer__col">
    <h2 class="pri-footer__heading">Social media</h2>
    <div>
      <?php include 'inc/social-buttons.php';?>
    </div>
  </div>

  </footer>

  <?php wp_footer(); ?>

  <!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  </body>
</html>

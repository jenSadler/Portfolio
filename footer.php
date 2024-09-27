</div>
<footer>
<div class="footerSection">
  <img src="<?php echo get_template_directory_uri();?>/img/logo.png" class="footerLogo"/>
</div>

<div class="footerSection">
   <?php
    wp_nav_menu( array(
    'theme_location' => 'main-nav-menu',
    'container_class' => 'footerList' ) );
    ?>
</div>

<div class="footerSection">
  <ul class="footerList">
    <li><a href="#">About</a></li>
    <li><a href="#">Resume</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</div>

</footer>
</div>
</body>
</html>

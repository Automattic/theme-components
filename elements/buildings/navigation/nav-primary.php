<?php

function atomic_s_primarynav() {
  ?>
  <nav id="site-navigation" class="main-navigation" role="navigation">
    <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'atomic_s' ); ?></button>
    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
  </nav><!-- #site-navigation -->
  <?php
}

<?

function atomic_s_siteinfo() {
?>
<div class="site-info">
  <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'atomic_s' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'atomic_s' ), 'WordPress' ); ?></a>
  <span class="sep"> | </span>
  <?php printf( __( 'Theme: %1$s by %2$s.', 'atomic_s' ), 'atomic_s', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
</div><!-- .site-info -->
<?php
}

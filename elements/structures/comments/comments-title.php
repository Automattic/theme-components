<?

function atomic_s_comments_title() {
  ?>
  <h2 class="comments-title">
    <?php
      printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'atomic_s' ),
        number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
    ?>
  </h2>
  <?php endif;
}

<?

function atomic_s_comments_list() {
  ?>
  <ol class="comment-list">
    <?php
      wp_list_comments( array(
        'style'      => 'ol',
        'short_ping' => true,
      ) );
    ?>
  </ol><!-- .comment-list -->
  <?php endif;
}

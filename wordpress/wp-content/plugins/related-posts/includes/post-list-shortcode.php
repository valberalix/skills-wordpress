<?php

function create_post_list_shortcode()
{
  // usar WP_Query, funções nativas de categorias do WordPress.
  $args = [];
  $posts = wp_get_current_user();

  ob_start();
  ?>

  <div class="post-list-shortcode-container">
    <?php if ($posts): ?>
      <h3>Mais Artigos</h3>
      <ul>
        <?php foreach ($posts as $post) : ?>
          <li></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>

  <?php
  $output = ob_get_contents();
  ob_end_clean();

  return $output;
}
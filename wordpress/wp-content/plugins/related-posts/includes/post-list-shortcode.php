<?php

function create_post_list_shortcode()
{
  
  global $post;

  $categories = get_the_category($post->ID);
  $category_id = !empty($categories) ? $categories[0]->term_id : null;

  $args = array(
    'cat' => $category_id,
    'posts_per_page' => 5,
    'post__not_in' => [($post->ID)],
  );

  $wp_query = new WP_Query($args);
  $posts = $wp_query->posts ?? [];
  // echo '<script>console.log("posts:::",' . json_encode($posts) . ')</script>';

  ob_start();
  ?>

  <div class="post-list-shortcode-container">
    <?php if ($posts && !empty($posts)): ?>
      <h3>Mais Artigos</h3>
      <ul>
        <?php foreach ($posts as $post) : ?>
          <li>
            <a href="<?php echo get_permalink($post->ID) ?>">
              <?php echo get_the_title($post->ID) ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>

  <?php
  $output = ob_get_contents();
  ob_end_clean();

  wp_reset_postdata();

  return $output;
}
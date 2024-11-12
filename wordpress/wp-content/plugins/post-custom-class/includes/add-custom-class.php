<?php

function add_post_custom_class($post)
{
  // var_dump($post);
  // echo '<script>console.log("post:::",' . json_encode($post) . ')</script>';

  return str_replace('<p>', '<p class="custom-class">', $post);
}
<?php

/**
 * Registers a new options page under Settings.
 */
function add_github_menu() {
	add_options_page( 
		__( 'GitHub meta tag', 'textdomain' ),
		__( 'GitHub meta tag', 'textdomain' ),
		'manage_options',
    'github_metatag_url',
		'github_settings_page'
	);
}

/**
 * Settings page display callback.
 */
function github_settings_page() {

  if (isset($_POST['github_url'])) {
    update_option('github_url', sanitize_text_field($_POST['github_url']));
    echo '<div class="updated"><p>Configurações salvas.</p></div>';
  }

  $github_url = get_option('github_url', '');
  ?>
    <form method="POST" action="">
      <div>
        <div><h3>Insira abaixo a url do seu GitHub:</h3></div>
        <div>
          <input name="github_url" value="<?php echo esc_attr($github_url) ?? 'https://github.com/username'; ?>" type="text" />
        </div>
        <div><?php submit_button(); ?></div>
      </div>
    </form>
  <?php
}

function add_github_meta_tag()
{
  $github_url = get_option('github_url', '') ?? '{url do perfil}';
  echo "<meta name='verify-skills' content=$github_url>";
}

add_action('wp_head', 'add_github_meta_tag');
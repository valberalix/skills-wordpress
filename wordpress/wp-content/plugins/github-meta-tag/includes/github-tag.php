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
  echo '
    <div>
      <div><h3>Insira abaixo a url do seu GitHub:</h3></div>
      <div>
        <input name="github-url" placeholder="https://github.com/username" type="text" />
        <input name="submit" type="submit" value="Salvar" />
      </div>
    </div>';
}

function add_github_meta_tag()
{
  $id = $_GET['github-url'] ?? '{url do perfil}';
  echo "<meta name='verify-skills' content=$id>";
}

add_action('wp_head', 'add_github_meta_tag');
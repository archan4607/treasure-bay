<?php
/* * ---------------------------------------------------------------
* Theme Directory Define
* -------------------------------------------------------------* */
$theme_info = wp_get_theme();

define('ULINA_THEME_DIR', get_template_directory());
define('ULINA_THEME_URL', get_template_directory_uri());
define('ULINA_STYLESHEET_URL', get_stylesheet_uri());

define('ULINA_INC_DIR', ULINA_THEME_DIR . '/inc');
define('ULINA_INC_URL', ULINA_THEME_URL . '/inc');
define('ULINA_CUSTOMIZER_DIR', ULINA_THEME_DIR . '/framework-customizations/customizer/');

define('ULINA_WD_DIR', ULINA_THEME_DIR . '/widgets');

define('ULINA_ASSETS_DIR', ULINA_THEME_DIR . '/assets');
define('ULINA_ASSETS_URL', ULINA_THEME_URL . '/assets');

define('ULINA_ASSETS_CSS_DIR', ULINA_THEME_DIR . '/assets/css');
define('ULINA_ASSETS_CSS_URL', ULINA_THEME_URL . '/assets/css');

define('ULINA_ASSETS_JS_DIR', ULINA_THEME_DIR . '/assets/js');
define('ULINA_ASSETS_JS_URL', ULINA_THEME_URL . '/assets/js');

define('ULINA_ASSETS_IMAGES_DIR', ULINA_THEME_DIR . '/assets/images');
define('ULINA_ASSETS_IMAGES_URL', ULINA_THEME_URL . '/assets/images');


/* * ---------------------------------------------------------------
* Theme Init
* -------------------------------------------------------------* */
require_once get_parent_theme_file_path('/inc/init.php');
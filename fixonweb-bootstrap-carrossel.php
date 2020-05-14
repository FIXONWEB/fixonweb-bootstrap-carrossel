<?php
/**
 * Plugin Name:     fixonweb-bootstrap-carrossel
 * Plugin URI:      https://github.com/fixonweb/fixonweb-bootstrap-carrossel
 * Description:     Um tipo de postagem personalizado para escolher imagens e conteúdo que gera o Bootstrap Image Carousel (controle deslizante) a partir do código de acesso [image-carrossel]. - Plugin WordPress
 * Author:          FIXONWEB
 * Author URI:      https://github.com/fixonweb
 * Text Domain:     fixonweb-bootstrap-carrossel
 * Domain Path:     /languages
 * Version:         0.1.1
 *
 * @package         Fixonweb_Bootstrap_Carrossel
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require 'plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker('https://github.com/FIXONWEB/fixonweb-bootstrap-carrossel', __FILE__, 'fixonweb-bootstrap-carrossel/fixonweb-bootstrap-carrossel');

require_once('src/cptbc-init.php');
require_once('src/cptbc-admin.php');
require_once('src/cptbc-settings.php');
require_once('src/cptbc-frontend.php');

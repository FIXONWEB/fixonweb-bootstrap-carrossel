<?php
/**
 * Plugin Name:     fixonweb-bootstrap-carrossel
 * Plugin URI:      https://github.com/fixonweb/fixonweb-bootstrap-carrossel
 * Description:     Um tipo de postagem personalizado para escolher imagens e conteúdo que gera o Bootstrap Image Carousel (controle deslizante) a partir do código de acesso [image-carrossel]. - Plugin WordPress
 * Author:          FIXONWEB
 * Author URI:      https://github.com/fixonweb
 * Text Domain:     fixonweb-bootstrap-carrossel
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Fixonweb_Bootstrap_Carrossel
 */

// Your code starts here.

require 'plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker('https://github.com/FIXONWEB/fixonweb-bootstrap-carrossel', __FILE__, 'fixonweb-bootstrap-carrossel/fixonweb-bootstrap-carrossel');
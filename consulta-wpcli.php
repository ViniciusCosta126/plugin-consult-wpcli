<?php
/**
 * Plugin Name: Meu Plugin WP-CLI
 * Description: Adiciona um comando personalizado ao WP-CLI.
 * Version: 1.0
 * Author: Seu Nome
 */

if ( defined( 'WP_CLI' ) && WP_CLI ) {
    require_once( __DIR__ . '/bin/consulta-comando.php' );
}
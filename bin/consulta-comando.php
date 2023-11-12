<?php

/**
 * Implementa o comando 'Consulta de registros de hora no banco de dados' para o WP-CLI.
 */
class Consulta_Registrost_WPCLI
{

    public function registros()
    {
        global $wpdb;

        $tabela = $wpdb->prefix ."registros_hora";
        $consulta = "SELECT * from $tabela";

        $resultados = $wpdb->get_results($consulta,ARRAY_A );
        $headers = array_keys( $resultados[0] );
        $data = $resultados;
        WP_CLI\Utils\format_items( 'table', $data, $headers );

        WP_CLI::line(print_r("Existem: " . count($resultados) . " resultado(s)",true));

    }
}

// Registra o comando com WP-CLI.
WP_CLI::add_command('consulta', 'Consulta_Registrost_WPCLI');

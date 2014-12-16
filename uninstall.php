<?php
global $wpdb;
delete_option('mlw_bm_version');
$results = $wpdb->query( "DROP TABLE IF EXISTS ".$wpdb->prefix."mlw_bm_stats" );
?>
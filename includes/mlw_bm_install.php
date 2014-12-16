<?php

function mlw_bm_activate()
{
	global $wpdb;
	$table_name = $wpdb->prefix . "mlw_bm_stats";
	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) 
	{
		$sql = "CREATE TABLE " . $table_name . " (

			stat_id mediumint(9) NOT NULL AUTO_INCREMENT,

			page TEXT NOT NULL,
			
			referrer TEXT NOT NULL,
			
			browser TEXT NOT NULL,
			
			platform TEXT NOT NULL,
			
			ip TEXT NOT NULL,
			
			country TEXT NOT NULL,
			
			visit_time DATETIME NOT NULL,

			PRIMARY KEY  (stat_id)

		);";
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );	
	}
}

function mlw_bm_deactivate()
{
	
}
?>
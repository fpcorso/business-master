<?php
function bm_add_dashboard_widget() 
{
	wp_add_dashboard_widget(
		'bm_snapshot_widget', 
		'Business Master Snapshot',
		'bm_snapshot_dashboard_widget'
	);
}
add_action( 'wp_dashboard_setup', 'bm_add_dashboard_widget' );
function bm_snapshot_dashboard_widget() 
{
	global $wpdb;
	$mlw_bm_today_views = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".date("Y-m-d")." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	$mlw_last_week =  mktime(0, 0, 0, date("m")  , date("d")-7, date("Y"));
	$mlw_last_week = date("Y-m-d", $mlw_last_week);
	$mlw_bm_last_weekday_views = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_last_week." 00:00:00' AND '".$mlw_last_week." 23:59:59')");
	if ($mlw_bm_last_weekday_views != 0)
	{
		$mlw_bm_analyze_today = round((($mlw_bm_today_views - $mlw_bm_last_weekday_views) / $mlw_bm_last_weekday_views) * 100, 2);
	}
	else
	{
		$mlw_bm_analyze_today = $mlw_bm_today_views * 100;
	}
	
	$mlw_bm_today_unique_views = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".date("Y-m-d")." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	$mlw_last_week =  mktime(0, 0, 0, date("m")  , date("d")-7, date("Y"));
	$mlw_last_week = date("Y-m-d", $mlw_last_week);
	$mlw_bm_last_weekday_unique_views = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_last_week." 00:00:00' AND '".$mlw_last_week." 23:59:59')");
	if ($mlw_bm_last_weekday_unique_views != 0)
	{
		$mlw_bm_analyze_unique_today = round((($mlw_bm_today_unique_views - $mlw_bm_last_weekday_unique_views) / $mlw_bm_last_weekday_unique_views) * 100, 2);
	}
	else
	{
		$mlw_bm_analyze_unique_today = $mlw_bm_today_unique_views * 100;
	}
	
	$mlw_bm_page_views = $wpdb->get_row( "SELECT page, COUNT(page) AS count FROM ".$wpdb->prefix."mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".date("Y-m-d")." 00:00:00' AND '".date("Y-m-d")." 23:59:59') GROUP BY page ORDER BY 2 DESC LIMIT 1" );
	
	$mlw_site_url = home_url();
	if ( stripos($mlw_site_url, 'http://') !== false ) 
	{
		$mlw_site_url = str_replace( "http://" , '', $mlw_site_url);
	}
	if ( stripos($mlw_site_url, 'https://') !== false ) 
	{
		$mlw_site_url = str_replace( "https://" , '', $mlw_site_url);
	}
	if ( stripos($mlw_site_url, 'www.') !== false ) 
	{
		$mlw_site_url = str_replace( "www." , '', $mlw_site_url);
	}
	$mlw_bm_referrer_views = $wpdb->get_row( "SELECT referrer, COUNT(referrer) AS count FROM ".$wpdb->prefix."mlw_bm_stats WHERE browser <> 'Robot' AND (referrer NOT LIKE '%".$mlw_site_url."%' AND referrer NOT LIKE '%None%') AND  (visit_time BETWEEN '".date("Y-m-d")." 00:00:00' AND '".date("Y-m-d")." 23:59:59') GROUP BY referrer ORDER BY 2 DESC LIMIT 1" );
	
	
	?>
	<style>
	.bm_dashboard_list
	{
		overflow: hidden;
		margin: 0;
	}
	.bm_dashboard_half_element
	{
		width: 50%;
	}
	.bm_dashboard_element
	{
		width: 100%;
		float: left;
		padding: 0;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		margin: 0;
		border-top: 1px solid #ececec;
		color: #aaa;
	}
	.bm_dashboard_inside
	{
		display: block;
		color: #aaa;
		padding: 9px 12px;
		-webkit-transition: all ease .5s;
		position: relative;
		font-size: 12px;
	}
	.bm_dashboard_inside strong
	{
		font-size: 18px;
		line-height: 1.2em;
		font-weight: 400;
		display: block;
		color: #21759b;
	}
	.bm_dashboard_graph
	{
		width: 25%;
		height: 10px;
		display: block;
		float: right;
		position: absolute;
		right: 0;
		top: 50%;
		margin-right: 12px;
		margin-top: -1.25em;
		font-size: 18px
	}
	.bm_dashboard_graph img
	{
		width: 15px;
		height: 15px;
	}
	</style>
	<ul class="bm_dashboard_list">
		<li class="bm_dashboard_element">
			<div class="bm_dashboard_inside">
				<strong><?php echo $mlw_bm_today_views; ?></strong>
				views today
				<span class="bm_dashboard_graph">
					<?php 
					echo $mlw_bm_analyze_today."% ";
					if ($mlw_bm_analyze_today >= 0)
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/green_triangle.png'/>";
					}
					else
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/red_triangle.png'/>";
					}
					?>
				</span>
			</div>
		</li>
		<li class="bm_dashboard_element">
			<div class="bm_dashboard_inside">
				<strong><?php echo $mlw_bm_today_unique_views; ?></strong>
				unique visitors today
				<span class="bm_dashboard_graph">
					<?php 
					echo $mlw_bm_analyze_unique_today."% ";
					if ($mlw_bm_analyze_unique_today >= 0)
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/green_triangle.png'/>";
					}
					else
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/red_triangle.png'/>";
					}
					?>
				</span>
			</div>
		</li>
		<li class="bm_dashboard_element bm_dashboard_half_element">
			<div class="bm_dashboard_inside">
				<strong><?php echo $mlw_bm_page_views->page; ?></strong>
				most viewed page today with <?php echo $mlw_bm_page_views->count; ?> views
			</div>
		</li>
		<li class="bm_dashboard_element bm_dashboard_half_element">
			<div class="bm_dashboard_inside">
				<strong><?php echo $mlw_bm_referrer_views->referrer; ?></strong>
				most referred site today with <?php echo $mlw_bm_referrer_views->count; ?> referrals
			</div>
		</li>
	</ul>
	<?php
}
?>

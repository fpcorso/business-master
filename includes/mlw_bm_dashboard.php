<?php
/*
Generates the support for Business Master
Copyright 2014, My Local Webstop (email : fpcorso@mylocalwebstop.com)
*/


function mlw_bm_generate_dashboard_page()
{	
	$mlw_bm_version = get_option('mlw_bm_version');
	add_meta_box("wpss_mrts", "General Post Info", "mlw_bm_post_info_meta_box", "mlw_bm_wpss6");
	add_meta_box("wpss_mrts", 'Daily Page Views', "mlw_bm_daily_views", "mlw_bm_wpss2"); 
	add_meta_box("wpss_mrts", '7 Day Page Views', "mlw_bm_weekly_views", "mlw_bm_wpss7");
	add_meta_box("wpss_mrts", '30 Day Page Views', "mlw_bm_monthly_views", "mlw_bm_wpss8");
	add_meta_box("wpss_mrts", '120 Day Page Views', "mlw_bm_quarterly_views", "mlw_bm_wpss9");
	add_meta_box("wpss_mrts", '30 Day Country Stats', "mlw_bm_country_views", "mlw_bm_wpss10");
	add_meta_box("wpss_mrts", '30 Day Platform Stats', "mlw_bm_platform_views", "mlw_bm_wpss11");
	add_meta_box("wpss_mrts", '30 Day Browser Stats', "mlw_bm_browser_views", "mlw_bm_wpss12");
	add_meta_box("wpss_mrts", '30 Day Page Stats', "mlw_bm_page_views", "mlw_bm_wpss14");
	add_meta_box("wpss_mrts", '30 Day Referrer Stats', "mlw_bm_referrer_views", "mlw_bm_wpss15");
	add_meta_box("wpss_mrts", 'Daily Stats', "mlw_bm_daily_view_graph", "mlw_bm_wpss16");
	add_meta_box("wpss_mrts", '7 Day Stats', "mlw_bm_weekly_view_graph", "mlw_bm_wpss17");
	add_meta_box("wpss_mrts", '30 Day Stats', "mlw_bm_monthly_view_graph", "mlw_bm_wpss18");
	add_meta_box("wpss_mrts", '120 Day Stats', "mlw_bm_quarterly_view_graph", "mlw_bm_wpss19");
	add_meta_box("wpss_mrts", 'My Local Webstop Services', "mlw_bm_services", "mlw_bm_wpss13");
	add_meta_box("wpss_mrts", 'Support', "mlw_bm_wpss_mrt_meta_box3", "mlw_bm_wpss3");
	add_meta_box("wpss_mrts", 'Contribution', "mlw_bm_wpss_mrt_meta_box4", "mlw_bm_wpss4");
	add_meta_box("wpss_mrts", 'News From My Local Webstop', "mlw_bm_wpss_mrt_meta_box5", "mlw_bm_wpss5");
	add_meta_box("wpss_mrts", 'Daily Uniques', "mlw_bm_daily_uniques", "mlw_bm_wpss20");
	add_meta_box("wpss_mrts", '7 Day Uniques', "mlw_bm_weekly_uniques", "mlw_bm_wpss21");
	add_meta_box("wpss_mrts", '30 Day Uniques', "mlw_bm_monthly_uniques", "mlw_bm_wpss22");
	add_meta_box("wpss_mrts", '120 Day Uniques', "mlw_bm_quarterly_uniques", "mlw_bm_wpss23");
	?>
	<!-- css -->
	<style type="text/css">
		div.mlw_bm_email_support {
		text-align: left;
		}
		div.mlw_bm_email_support input[type='text'] {
		border-color:#000000;
		color:#3300CC; 
		cursor:hand;
		}
		textarea{
		border-color:#000000;
		color:#3300CC; 
		cursor:hand;
		}
		div.donation {
		border-width: 1px;
		border-style: solid;
		padding: 0 0.6em;
		margin: 5px 0 15px;
		-moz-border-radius: 3px;
		-khtml-border-radius: 3px;
		-webkit-border-radius: 3px;
		border-radius: 3px;
		background-color: #ffffe0;
		border-color: #e6db55;
		text-align: center;
		}
		donation.p {	margin: 0.5em 0;
		line-height: 1;
		padding: 2px;
		}
		p em {
		padding-left: 1em;
		color: #555;
		font-weight: bold;
		}
	</style>
	<script>
		function mlw_bm_validateForm()
		{
			var x=document.forms['emailForm']['email'].value;
			if (x==null || x=='')
			{
				document.getElementById('mlw_bm_support_message').innerHTML = '**Email must be filled out!**';
				return false;
			};
			var x=document.forms['emailForm']['username'].value;
			if (x==null || x=='')
			{
				document.getElementById('mlw_bm_support_message').innerHTML = '**Name must be filled out!**';
				return false;
			};
			var x=document.forms['emailForm']['message'].value;
			if (x==null || x=='')
			{
				document.getElementById('mlw_bm_support_message').innerHTML = '**There must be a message to send!**';
				return false;
			};
			var x=document.forms['emailForm']['email'].value;
			var atpos=x.indexOf('@');
			var dotpos=x.lastIndexOf('.');
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
			{
				document.getElementById('mlw_bm_support_message').innerHTML = '**Not a valid e-mail address!**';
				return false;
			}
		}
	</script>
	<script src="<?php echo plugin_dir_url( __FILE__ ); ?>Chart.js"></script>
	<div class="wrap">
	<h2>Business Master Version <?php echo $mlw_bm_version; ?> Dashboard</h2>
	<?php echo mlw_bm_show_adverts(); ?>
	
	<!--Analyzation Views Boxes-->
	<div style="float:left; width:19%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss2','advanced',''); ?>	
	</div>
	
	<div style="float:left; width:19%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss7','advanced',''); ?>	
	</div>
	
	<div style="float:left; width:19%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss8','advanced',''); ?>	
	</div>
	
	<div style="float:left; width:19%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss9','advanced',''); ?>	
	</div>
	
	<!--MyLocalWebstop Services-->
	<div style="float:right; width:24%; " class="inner-sidebar1">
		<?php if ( get_option('mlw_advert_shows') == 'true' ) {do_meta_boxes('mlw_bm_wpss13','advanced','');} ?>	
	</div>
	
	<?php if ( get_option('mlw_advert_shows') != 'true' ) {echo '<div style="clear:both"></div>';} ?>	
	
	<!--Analyzation Uniques Boxes-->
	<div style="float:left; width:19%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss20','advanced',''); ?>	
	</div>
	
	<div style="float:left; width:19%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss21','advanced',''); ?>	
	</div>
	
	<div style="float:left; width:19%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss22','advanced',''); ?>	
	</div>
	
	<div style="float:left; width:19%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss23','advanced',''); ?>	
	</div>
	
	<?php if ( get_option('mlw_advert_shows') != 'true' ) {echo '<div style="clear:both"></div>';} ?>	
	
	<!--Views Graphs-->
	<div style="float:left; width:19%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss16','advanced',''); ?>	
	</div>
	
	<div style="float:left; width:19%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss17','advanced',''); ?>	
	</div>
	
	<div style="float:left; width:19%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss18','advanced',''); ?>	
	</div>
	
	<div style="float:left; width:19%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss19','advanced',''); ?>	
	</div>
	
	<div style="clear:both"></div>
	
	<!--Views Breakdown Info-->	
	<div style="float:left; width:45%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss10','advanced',''); ?>	
	</div>
	
	<div style="float:left; width:45%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss11','advanced',''); ?>	
	</div>
	
	<div style="float:left; width:45%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss12','advanced',''); ?>	
	</div>
	
	<div style="float:left; width:45%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss14','advanced',''); ?>	
	</div>
	
	<div style="float:left; width:45%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss15','advanced',''); ?>	
	</div>
	
	<div style="float:left; width:45%;" class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss6','advanced','');  ?>	
	</div>	
	
	<div style="clear:both"></div>
	
	<div style="float:left; width:33%;" class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss3','advanced','');  ?>	
	</div>
	
	<div style="float:left; width:33%; " class="inner-sidebar1">
		<?php if ( get_option('mlw_advert_shows') == 'true' ) {do_meta_boxes('mlw_bm_wpss4','advanced','');} ?>	
	</div>
	
	<div style="float:left; width:33%; " class="inner-sidebar1">
		<?php do_meta_boxes('mlw_bm_wpss5','advanced',''); ?>	
	</div>

	</div>
	<?php
}

function mlw_bm_post_info_meta_box()
{
	global $post;
	$args = array( 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page'   => -1 );
	$mlw_bm_all_posts = get_posts( $args );
	$mlw_bm_total_posts = count($mlw_bm_all_posts);
	$mlw_bm_recent_post = "";
	foreach ( $mlw_bm_all_posts as $post )
	{
	  	setup_postdata( $post );
		$mlw_bm_recent_post = $post->post_title;
		break;
	}
	wp_reset_postdata();
	?>
	<table>
		<tr>
			<td>Total Posts:</td><td><?php echo $mlw_bm_total_posts; ?></td>
		</tr>
		<tr>
			<td>Most Recent:</td><td><?php echo $mlw_bm_recent_post; ?></td>
		</tr>
	</table>
	<?php
}

function mlw_bm_country_views()
{
	global $wpdb;
	$mlw_this_month =  mktime(0, 0, 0, date("m")  , date("d")-29, date("Y"));
	$mlw_this_month = date("Y-m-d", $mlw_this_month);
	$mlw_bm_country_views = $wpdb->get_results( "SELECT country, COUNT(country) AS count FROM ".$wpdb->prefix."mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_month." 00:00:00' AND '".date("Y-m-d")." 23:59:59') GROUP BY country ORDER BY 2 DESC" );
	?>
	<div>
		<canvas id="mlw_bm_country_graph" width="500" height="500"/>
	</div>
	<script>
	var mlwBMCountryData = [
	<?php
	foreach($mlw_bm_country_views as $mlw_bm_eaches)
	{
		echo '{
					value: '.$mlw_bm_eaches->count.',
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "'.$mlw_bm_eaches->country.'"
				},';
	}
	?>
	];
	</script>
	<?php	
}

function mlw_bm_browser_views()
{
	global $wpdb;
	$mlw_this_month =  mktime(0, 0, 0, date("m")  , date("d")-29, date("Y"));
	$mlw_this_month = date("Y-m-d", $mlw_this_month);
	$mlw_bm_browser_views = $wpdb->get_results( "SELECT browser, COUNT(browser) AS count FROM ".$wpdb->prefix."mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_month." 00:00:00' AND '".date("Y-m-d")." 23:59:59') GROUP BY browser ORDER BY 2 DESC" );
	?>
	<div>
		<canvas id="mlw_bm_browser_graph" width="500" height="500"/>
	</div>
	<script>
	var mlwBMBrowserData = [
	<?php
	foreach($mlw_bm_browser_views as $mlw_bm_eaches)
	{
		echo '{
					value: '.$mlw_bm_eaches->count.',
					color:"#46BFBD",
					highlight: "#FF5A5E",
					label: "'.$mlw_bm_eaches->browser.'"
				},';
	}
	?>
	];
	</script>
	<?php
}

function mlw_bm_platform_views()
{
	global $wpdb;
	$mlw_this_month =  mktime(0, 0, 0, date("m")  , date("d")-29, date("Y"));
	$mlw_this_month = date("Y-m-d", $mlw_this_month);
	$mlw_bm_platform_views = $wpdb->get_results( "SELECT platform, COUNT(platform) AS count FROM ".$wpdb->prefix."mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_month." 00:00:00' AND '".date("Y-m-d")." 23:59:59') GROUP BY platform ORDER BY 2 DESC" );
	?>
	<div>
		<canvas id="mlw_bm_platform_graph" width="500" height="500"/>
	</div>
	<script>
	var mlwBMPlatformData = [
	<?php
	foreach($mlw_bm_platform_views as $mlw_bm_eaches)
	{
		echo '{
					value: '.$mlw_bm_eaches->count.',
					color:"#FDB45C",
					highlight: "#FF5A5E",
					label: "'.$mlw_bm_eaches->platform.'"
				},';
	}
	?>
	];
	</script>
	<?php
}

function mlw_bm_page_views()
{
	global $wpdb;
	$mlw_this_month =  mktime(0, 0, 0, date("m")  , date("d")-29, date("Y"));
	$mlw_this_month = date("Y-m-d", $mlw_this_month);
	$mlw_bm_page_views = $wpdb->get_results( "SELECT page, COUNT(page) AS count FROM ".$wpdb->prefix."mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_month." 00:00:00' AND '".date("Y-m-d")." 23:59:59') GROUP BY page ORDER BY 2 DESC LIMIT 40" );
	?>
	<div>
		<canvas id="mlw_bm_pageViews_graph" width="500" height="500"/>
	</div>
	<script>
	var mlwBMPageViewsData = [
	<?php
	foreach($mlw_bm_page_views as $mlw_bm_eaches)
	{
		echo '{
					value: '.$mlw_bm_eaches->count.',
					color:"#949FB1",
					highlight: "#FF5A5E",
					label: "'.$mlw_bm_eaches->page.'"
				},';
	}
	?>
	];
	</script>
	<?php	
}

function mlw_bm_referrer_views()
{
	global $wpdb;
	$mlw_this_month =  mktime(0, 0, 0, date("m")  , date("d")-29, date("Y"));
	$mlw_this_month = date("Y-m-d", $mlw_this_month);
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
	$mlw_bm_referrer_views = $wpdb->get_results( "SELECT referrer, COUNT(referrer) AS count FROM ".$wpdb->prefix."mlw_bm_stats WHERE browser <> 'Robot' AND (referrer NOT LIKE '%".$mlw_site_url."%' AND referrer NOT LIKE '%None%') AND  (visit_time BETWEEN '".$mlw_this_month." 00:00:00' AND '".date("Y-m-d")." 23:59:59') GROUP BY referrer ORDER BY 2 DESC LIMIT 10" );
	?>
	<div>
		<canvas id="mlw_bm_referrer_graph" width="500" height="500"/>
	</div>
	<script>
	var mlwBMReferrerData = [
	<?php
	foreach($mlw_bm_referrer_views as $mlw_bm_eaches)
	{
		echo '{
					value: '.$mlw_bm_eaches->count.',
					color:"#4D5360",
					highlight: "#FF5A5E",
					label: "'.$mlw_bm_eaches->referrer.'"
				},';
	}
	?>
	];
	</script>
	<?php	
}

function mlw_bm_daily_views()
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
	?>
	<div>
		<table width="100%">
			<tr>
				<td><div style="font-size: 50px; text-align:center;"><?php echo $mlw_bm_today_views; ?></div></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td>
					<div style="font-size: 30px; text-align:center;">
					<?php 
					echo "<span title='Compared to this day last week'>".$mlw_bm_analyze_today."%</span>"; 
					if ($mlw_bm_analyze_today >= 0)
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/green_triangle.png' width='40px' height='40px'/>";
					}
					else
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/red_triangle.png' width='40px' height='40px'/>";
					}
					?>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<?php
}

function mlw_bm_daily_uniques()
{
	global $wpdb;
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
	?>
	<div>
		<table width="100%">
			<tr>
				<td><div style="font-size: 50px; text-align:center;"><?php echo $mlw_bm_today_unique_views; ?></div></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td>
					<div style="font-size: 30px; text-align:center;">
					<?php 
					echo "<span title='Compared to this day last week'>".$mlw_bm_analyze_unique_today."%</span>"; 
					if ($mlw_bm_analyze_unique_today >= 0)
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/green_triangle.png' width='40px' height='40px'/>";
					}
					else
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/red_triangle.png' width='40px' height='40px'/>";
					}
					?>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<?php
}

function mlw_bm_weekly_views()
{
	global $wpdb;
	
	$mlw_this_week =  mktime(0, 0, 0, date("m")  , date("d")-6, date("Y"));
	$mlw_this_week = date("Y-m-d", $mlw_this_week);
	$mlw_bm_this_week_views = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_week." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	
	$mlw_last_week_start =  mktime(0, 0, 0, date("m")  , date("d")-13, date("Y"));
	$mlw_last_week_start = date("Y-m-d", $mlw_last_week_start);
	$mlw_last_week_end =  mktime(0, 0, 0, date("m")  , date("d")-7, date("Y"));
	$mlw_last_week_end = date("Y-m-d", $mlw_last_week_end);
	$mlw_bm_last_week_views = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_last_week_start." 00:00:00' AND '".$mlw_last_week_end." 23:59:59')");
	
	if ($mlw_bm_last_week_views != 0)
	{
		$mlw_bm_analyze_week = round((($mlw_bm_this_week_views - $mlw_bm_last_week_views) / $mlw_bm_last_week_views) * 100, 2);
	}
	else
	{
		$mlw_bm_analyze_week = $mlw_bm_this_week_views * 100;
	}
	?>
	<div>
		<table width="100%">
			<tr>
				<td><div style="font-size: 50px; text-align:center;"><?php echo $mlw_bm_this_week_views; ?></div></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td>
					<div style="font-size: 30px; text-align:center;">
					<?php 
					echo "<span title='Compared to the previous 7 days'>".$mlw_bm_analyze_week."%</span>"; 
					if ($mlw_bm_analyze_week >= 0)
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/green_triangle.png' width='40px' height='40px'/>";
					}
					else
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/red_triangle.png' width='40px' height='40px'/>";
					}
					?>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<?php
}

function mlw_bm_weekly_uniques()
{
	global $wpdb;
	$mlw_this_week =  mktime(0, 0, 0, date("m")  , date("d")-6, date("Y"));
	$mlw_this_week = date("Y-m-d", $mlw_this_week);
	$mlw_bm_this_week_unique_views = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_week." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	
	$mlw_last_week_start =  mktime(0, 0, 0, date("m")  , date("d")-13, date("Y"));
	$mlw_last_week_start = date("Y-m-d", $mlw_last_week_start);
	$mlw_last_week_end =  mktime(0, 0, 0, date("m")  , date("d")-7, date("Y"));
	$mlw_last_week_end = date("Y-m-d", $mlw_last_week_end);
	$mlw_bm_last_week_unique_views = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_last_week_start." 00:00:00' AND '".$mlw_last_week_end." 23:59:59')");
	
	if ($mlw_bm_last_week_unique_views != 0)
	{
		$mlw_bm_analyze_unique_week = round((($mlw_bm_this_week_unique_views - $mlw_bm_last_week_unique_views) / $mlw_bm_last_week_unique_views) * 100, 2);
	}
	else
	{
		$mlw_bm_analyze_unique_week = $mlw_bm_this_week_unique_views * 100;
	}
	?>
	<div>
		<table width="100%">
			<tr>
				<td><div style="font-size: 50px; text-align:center;"><?php echo $mlw_bm_this_week_unique_views; ?></div></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td>
					<div style="font-size: 30px; text-align:center;">
					<?php 
					echo "<span title='Compared to the previous 7 days'>".$mlw_bm_analyze_unique_week."%</span>"; 
					if ($mlw_bm_analyze_unique_week >= 0)
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/green_triangle.png' width='40px' height='40px'/>";
					}
					else
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/red_triangle.png' width='40px' height='40px'/>";
					}
					?>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<?php
}

function mlw_bm_monthly_views()
{
	global $wpdb;
	
	$mlw_this_month =  mktime(0, 0, 0, date("m")  , date("d")-29, date("Y"));
	$mlw_this_month = date("Y-m-d", $mlw_this_month);
	$mlw_bm_this_month_views = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_month." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	
	$mlw_last_month_start =  mktime(0, 0, 0, date("m")  , date("d")-59, date("Y"));
	$mlw_last_month_start = date("Y-m-d", $mlw_last_month_start);
	$mlw_last_month_end =  mktime(0, 0, 0, date("m")  , date("d")-30, date("Y"));
	$mlw_last_month_end = date("Y-m-d", $mlw_last_month_end);
	$mlw_bm_last_month_views = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_last_month_start." 00:00:00' AND '".$mlw_last_month_end." 23:59:59')");
	
	if ($mlw_bm_last_month_views != 0)
	{
		$mlw_bm_analyze_month = round((($mlw_bm_this_month_views - $mlw_bm_last_month_views) / $mlw_bm_last_month_views) * 100, 2);
	}
	else
	{
		$mlw_bm_analyze_month = $mlw_bm_this_month_views * 100;
	}
	?>
	<div>
		<table width="100%">
			<tr>
				<td><div style="font-size: 50px; text-align:center;"><?php echo $mlw_bm_this_month_views; ?></div></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td>
					<div style="font-size: 30px; text-align:center;">
					<?php 
					echo "<span title='Compared to the previous 30 days'>".$mlw_bm_analyze_month."%</span>"; 
					if ($mlw_bm_analyze_month >= 0)
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/green_triangle.png' width='40px' height='40px'/>";
					}
					else
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/red_triangle.png' width='40px' height='40px'/>";
					}
					?>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<?php
}

function mlw_bm_monthly_uniques()
{
	global $wpdb;
	
	$mlw_this_month =  mktime(0, 0, 0, date("m")  , date("d")-29, date("Y"));
	$mlw_this_month = date("Y-m-d", $mlw_this_month);
	$mlw_bm_this_month_unique_views = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_month." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	
	$mlw_last_month_start =  mktime(0, 0, 0, date("m")  , date("d")-59, date("Y"));
	$mlw_last_month_start = date("Y-m-d", $mlw_last_month_start);
	$mlw_last_month_end =  mktime(0, 0, 0, date("m")  , date("d")-30, date("Y"));
	$mlw_last_month_end = date("Y-m-d", $mlw_last_month_end);
	$mlw_bm_last_month_unique_views = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_last_month_start." 00:00:00' AND '".$mlw_last_month_end." 23:59:59')");
	
	if ($mlw_bm_last_month_unique_views != 0)
	{
		$mlw_bm_analyze_unique_month = round((($mlw_bm_this_month_unique_views - $mlw_bm_last_month_unique_views) / $mlw_bm_last_month_unique_views) * 100, 2);
	}
	else
	{
		$mlw_bm_analyze_unique_month = $mlw_bm_this_month_unique_views * 100;
	}
	?>
	<div>
		<table width="100%">
			<tr>
				<td><div style="font-size: 50px; text-align:center;"><?php echo $mlw_bm_this_month_unique_views; ?></div></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td>
					<div style="font-size: 30px; text-align:center;">
					<?php 
					echo "<span title='Compared to the previous 30 days'>".$mlw_bm_analyze_unique_month."%</span>"; 
					if ($mlw_bm_analyze_unique_month >= 0)
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/green_triangle.png' width='40px' height='40px'/>";
					}
					else
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/red_triangle.png' width='40px' height='40px'/>";
					}
					?>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<?php
}

function mlw_bm_quarterly_views()
{
	global $wpdb;
	
	$mlw_this_quater =  mktime(0, 0, 0, date("m")  , date("d")-89, date("Y"));
	$mlw_this_quater = date("Y-m-d", $mlw_this_quater);
	$mlw_bm_this_quater_views = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_quater." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	
	$mlw_last_quater_start =  mktime(0, 0, 0, date("m")  , date("d")-179, date("Y"));
	$mlw_last_quater_start = date("Y-m-d", $mlw_last_quater_start);
	$mlw_last_quater_end =  mktime(0, 0, 0, date("m")  , date("d")-90, date("Y"));
	$mlw_last_quater_end = date("Y-m-d", $mlw_last_quater_end);
	$mlw_bm_last_quater_views = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_last_quater_start." 00:00:00' AND '".$mlw_last_quater_end." 23:59:59')");
	
	if ($mlw_bm_last_quater_views != 0)
	{
		$mlw_bm_analyze_quater = round((($mlw_bm_this_quater_views - $mlw_bm_last_quater_views) / $mlw_bm_last_quater_views) * 100, 2);
	}
	else
	{
		$mlw_bm_analyze_quater = $mlw_bm_this_quater_views * 100;
	}
	?>
	<div>
		<table width="100%">
			<tr>
				<td><div style="font-size: 50px; text-align:center;"><?php echo $mlw_bm_this_quater_views; ?></div></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td>
					<div style="font-size: 30px; text-align:center;">
					<?php 
					echo "<span title='Compared to the previous 120 days'>".$mlw_bm_analyze_quater."%</span>"; 
					if ($mlw_bm_analyze_quater >= 0)
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/green_triangle.png' width='40px' height='40px'/>";
					}
					else
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/red_triangle.png' width='40px' height='40px'/>";
					}
					?>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<?php	
}

function mlw_bm_quarterly_uniques()
{
	global $wpdb;
	
	$mlw_this_quater =  mktime(0, 0, 0, date("m")  , date("d")-89, date("Y"));
	$mlw_this_quater = date("Y-m-d", $mlw_this_quater);
	$mlw_bm_this_quater_unique_views = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_quater." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	
	$mlw_last_quater_start =  mktime(0, 0, 0, date("m")  , date("d")-179, date("Y"));
	$mlw_last_quater_start = date("Y-m-d", $mlw_last_quater_start);
	$mlw_last_quater_end =  mktime(0, 0, 0, date("m")  , date("d")-90, date("Y"));
	$mlw_last_quater_end = date("Y-m-d", $mlw_last_quater_end);
	$mlw_bm_last_quater_unique_views = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_last_quater_start." 00:00:00' AND '".$mlw_last_quater_end." 23:59:59')");
	
	if ($mlw_bm_last_quater_unique_views != 0)
	{
		$mlw_bm_analyze_unique_quater = round((($mlw_bm_this_quater_unique_views - $mlw_bm_last_quater_unique_views) / $mlw_bm_last_quater_unique_views) * 100, 2);
	}
	else
	{
		$mlw_bm_analyze_unique_quater = $mlw_bm_this_quater_unique_views * 100;
	}
	?>
	<div>
		<table width="100%">
			<tr>
				<td><div style="font-size: 50px; text-align:center;"><?php echo $mlw_bm_this_quater_unique_views; ?></div></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td>
					<div style="font-size: 30px; text-align:center;">
					<?php 
					echo "<span title='Compared to the previous 120 days'>".$mlw_bm_analyze_unique_quater."%</span>"; 
					if ($mlw_bm_analyze_unique_quater >= 0)
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/green_triangle.png' width='40px' height='40px'/>";
					}
					else
					{
						echo "<img src='".plugin_dir_url( __FILE__ )."images/red_triangle.png' width='40px' height='40px'/>";
					}
					?>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<?php	
}

function mlw_bm_daily_view_graph()
{
	//Gather the weekly stats, one variable for each day for the graph
	global $wpdb;
	$mlw_bm_views_today = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".date("Y-m-d")." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	$mlw_bm_today_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".date("Y-m-d")." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	
	$mlw_yesterday =  mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"));
	$mlw_yesterday = date("Y-m-d", $mlw_yesterday);
	$mlw_bm_views_yesterday = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_yesterday." 00:00:00' AND '".$mlw_yesterday." 23:59:59')");
	$mlw_bm_yesterday_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_yesterday." 00:00:00' AND '".$mlw_yesterday." 23:59:59')");
	
	$mlw_two_days_ago =  mktime(0, 0, 0, date("m")  , date("d")-2, date("Y"));
	$mlw_two_days_ago = date("Y-m-d", $mlw_two_days_ago);
	$mlw_bm_views_two_days = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_two_days_ago." 00:00:00' AND '".$mlw_two_days_ago." 23:59:59')");
	$mlw_bm_two_days_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_two_days_ago." 00:00:00' AND '".$mlw_two_days_ago." 23:59:59')");
	
	$mlw_three_days_ago =  mktime(0, 0, 0, date("m")  , date("d")-3, date("Y"));
	$mlw_three_days_ago = date("Y-m-d", $mlw_three_days_ago);
	$mlw_bm_views_three_days = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_three_days_ago." 00:00:00' AND '".$mlw_three_days_ago." 23:59:59')");
	$mlw_bm_three_days_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_three_days_ago." 00:00:00' AND '".$mlw_three_days_ago." 23:59:59')");
	
	$mlw_four_days_ago =  mktime(0, 0, 0, date("m")  , date("d")-4, date("Y"));
	$mlw_four_days_ago = date("Y-m-d", $mlw_four_days_ago);
	$mlw_bm_views_four_days = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_four_days_ago." 00:00:00' AND '".$mlw_four_days_ago." 23:59:59')");
	$mlw_bm_four_days_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_four_days_ago." 00:00:00' AND '".$mlw_four_days_ago." 23:59:59')");
	
	$mlw_five_days_ago =  mktime(0, 0, 0, date("m")  , date("d")-5, date("Y"));
	$mlw_five_days_ago = date("Y-m-d", $mlw_five_days_ago);
	$mlw_bm_views_five_days = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_five_days_ago." 00:00:00' AND '".$mlw_five_days_ago." 23:59:59')");
	$mlw_bm_five_days_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_five_days_ago." 00:00:00' AND '".$mlw_five_days_ago." 23:59:59')");
	
	$mlw_six_days_ago =  mktime(0, 0, 0, date("m")  , date("d")-6, date("Y"));
	$mlw_six_days_ago = date("Y-m-d", $mlw_six_days_ago);
	$mlw_bm_views_six_days = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_six_days_ago." 00:00:00' AND '".$mlw_six_days_ago." 23:59:59')");
	$mlw_bm_six_days_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_six_days_ago." 00:00:00' AND '".$mlw_six_days_ago." 23:59:59')");
	
	$mlw_seven_days_ago =  mktime(0, 0, 0, date("m")  , date("d")-7, date("Y"));
	$mlw_seven_days_ago = date("Y-m-d", $mlw_seven_days_ago);
	$mlw_bm_views_seven_days = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_seven_days_ago." 00:00:00' AND '".$mlw_seven_days_ago." 23:59:59')");
	$mlw_bm_seven_days_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_seven_days_ago." 00:00:00' AND '".$mlw_seven_days_ago." 23:59:59')");
	?>
	<div>
		<div>
			<canvas id="mlw_qmn_daily_graph_canvas" height="450" width="600"></canvas>
		</div>
			


		<script>
			var mlwBMDailyData = {
				labels : ["","","","","","","",""],
				datasets : [
					{
						label: "Daily Page Views",
						fillColor : "rgba(220,220,220,0.2)",
						strokeColor : "rgba(220,220,220,1)",
						pointColor : "rgba(220,220,220,1)",
						pointStrokeColor : "#fff",
						pointHighlightFill : "#fff",
						pointHighlightStroke : "rgba(220,220,220,1)",
						data : [<?php echo $mlw_bm_views_seven_days.",".$mlw_bm_views_six_days.",".$mlw_bm_views_five_days.",".$mlw_bm_views_four_days.",".$mlw_bm_views_three_days.",".$mlw_bm_views_two_days.",".$mlw_bm_views_yesterday.",".$mlw_bm_views_today; ?>]
					},
					{
						label: "My Second dataset",
						fillColor : "rgba(151,187,205,0.2)",
						strokeColor : "rgba(151,187,205,1)",
						pointColor : "rgba(151,187,205,1)",
						pointStrokeColor : "#fff",
						pointHighlightFill : "#fff",
						pointHighlightStroke : "rgba(151,187,205,1)",
						data : [<?php echo $mlw_bm_seven_days_unique.",".$mlw_bm_six_days_unique.",".$mlw_bm_five_days_unique.",".$mlw_bm_four_days_unique.",".$mlw_bm_three_days_unique.",".$mlw_bm_two_days_unique.",".$mlw_bm_yesterday_unique.",".$mlw_bm_today_unique; ?>]
					}
				]

			}
		</script>
	</div>
	<?php
	
	
}

function mlw_bm_weekly_view_graph()
{
	//Gather the weekly stats, one variable for each day for the graph
	global $wpdb;	
	$mlw_this_week =  mktime(0, 0, 0, date("m")  , date("d")-6, date("Y"));
	$mlw_this_week = date("Y-m-d", $mlw_this_week);
	$mlw_bm_views_this_week = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_week." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	$mlw_bm_this_week_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_week." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	
	$mlw_last_week_first =  mktime(0, 0, 0, date("m")  , date("d")-13, date("Y"));
	$mlw_last_week_first = date("Y-m-d", $mlw_last_week_first);
	$mlw_last_week_last =  mktime(0, 0, 0, date("m")  , date("d")-7, date("Y"));
	$mlw_last_week_last = date("Y-m-d", $mlw_last_week_last);
	$mlw_bm_views_last_week = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_last_week_first." 00:00:00' AND '".$mlw_last_week_last." 23:59:59')");
	$mlw_bm_last_week_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_last_week_first." 00:00:00' AND '".$mlw_last_week_last." 23:59:59')");
	
	$mlw_two_week_first =  mktime(0, 0, 0, date("m")  , date("d")-20, date("Y"));
	$mlw_two_week_first = date("Y-m-d", $mlw_two_week_first);
	$mlw_two_week_last =  mktime(0, 0, 0, date("m")  , date("d")-14, date("Y"));
	$mlw_two_week_last = date("Y-m-d", $mlw_two_week_last);
	$mlw_bm_views_two_weeks = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_two_week_first." 00:00:00' AND '".$mlw_two_week_last." 23:59:59')");
	$mlw_bm_two_weeks_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_two_week_first." 00:00:00' AND '".$mlw_two_week_last." 23:59:59')");
	
	$mlw_three_week_first =  mktime(0, 0, 0, date("m")  , date("d")-27, date("Y"));
	$mlw_three_week_first = date("Y-m-d", $mlw_three_week_first);
	$mlw_three_week_last =  mktime(0, 0, 0, date("m")  , date("d")-21, date("Y"));
	$mlw_three_week_last = date("Y-m-d", $mlw_three_week_last);
	$mlw_bm_views_three_weeks = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_three_week_first." 00:00:00' AND '".$mlw_three_week_last." 23:59:59')");
	$mlw_bm_three_weeks_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_three_week_first." 00:00:00' AND '".$mlw_three_week_last." 23:59:59')");
	?>
	<div>
		<div>
			<canvas id="mlw_qmn_weekly_graph_canvas" height="450" width="600"></canvas>
		</div>
			


		<script>
			var mlwBMWeeklyData = {
				labels : ["","","",""],
				datasets : [
					{
						label: "Weekly Page Views",
						fillColor : "rgba(220,220,220,0.2)",
						strokeColor : "rgba(220,220,220,1)",
						pointColor : "rgba(220,220,220,1)",
						pointStrokeColor : "#fff",
						pointHighlightFill : "#fff",
						pointHighlightStroke : "rgba(220,220,220,1)",
						data : [<?php echo $mlw_bm_views_three_weeks.",".$mlw_bm_views_two_weeks.",".$mlw_bm_views_last_week.",".$mlw_bm_views_this_week; ?>]
					},
					{
						label: "My Second dataset",
						fillColor : "rgba(151,187,205,0.2)",
						strokeColor : "rgba(151,187,205,1)",
						pointColor : "rgba(151,187,205,1)",
						pointStrokeColor : "#fff",
						pointHighlightFill : "#fff",
						pointHighlightStroke : "rgba(151,187,205,1)",
						data : [<?php echo $mlw_bm_three_weeks_unique.",".$mlw_bm_two_weeks_unique.",".$mlw_bm_last_week_unique.",".$mlw_bm_this_week_unique; ?>]
					}
				]

			}
		</script>
	</div>
	<?php	
}

function mlw_bm_monthly_view_graph()
{
	//Gather the monthly stats, one variable for each day for the graph
	global $wpdb;	
	$mlw_this_month =  mktime(0, 0, 0, date("m")  , date("d")-29, date("Y"));
	$mlw_this_month = date("Y-m-d", $mlw_this_month);
	$mlw_bm_views_this_month = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_month." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	$mlw_bm_this_month_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_month." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	
	$mlw_last_month_first =  mktime(0, 0, 0, date("m")  , date("d")-59, date("Y"));
	$mlw_last_month_first = date("Y-m-d", $mlw_last_month_first);
	$mlw_last_month_last =  mktime(0, 0, 0, date("m")  , date("d")-30, date("Y"));
	$mlw_last_month_last = date("Y-m-d", $mlw_last_month_last);
	$mlw_bm_views_last_month = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_last_month_first." 00:00:00' AND '".$mlw_last_month_last." 23:59:59')");
	$mlw_bm_last_month_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_last_month_first." 00:00:00' AND '".$mlw_last_month_last." 23:59:59')");
	
	$mlw_two_month_first =  mktime(0, 0, 0, date("m")  , date("d")-89, date("Y"));
	$mlw_two_month_first = date("Y-m-d", $mlw_two_month_first);
	$mlw_two_month_last =  mktime(0, 0, 0, date("m")  , date("d")-60, date("Y"));
	$mlw_two_month_last = date("Y-m-d", $mlw_two_month_last);
	$mlw_bm_views_two_months = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_two_month_first." 00:00:00' AND '".$mlw_two_month_last." 23:59:59')");
	$mlw_bm_two_months_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_two_month_first." 00:00:00' AND '".$mlw_two_month_last." 23:59:59')");
	
	$mlw_three_month_first =  mktime(0, 0, 0, date("m")  , date("d")-119, date("Y"));
	$mlw_three_month_first = date("Y-m-d", $mlw_three_month_first);
	$mlw_three_month_last =  mktime(0, 0, 0, date("m")  , date("d")-90, date("Y"));
	$mlw_three_month_last = date("Y-m-d", $mlw_three_month_last);
	$mlw_bm_views_three_months = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_three_month_first." 00:00:00' AND '".$mlw_three_month_last." 23:59:59')");
	$mlw_bm_three_months_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_three_month_first." 00:00:00' AND '".$mlw_three_month_last." 23:59:59')");
	
	$mlw_four_month_first =  mktime(0, 0, 0, date("m")  , date("d")-149, date("Y"));
	$mlw_four_month_first = date("Y-m-d", $mlw_four_month_first);
	$mlw_four_month_last =  mktime(0, 0, 0, date("m")  , date("d")-120, date("Y"));
	$mlw_four_month_last = date("Y-m-d", $mlw_four_month_last);
	$mlw_bm_views_four_months = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_four_month_first." 00:00:00' AND '".$mlw_four_month_last." 23:59:59')");
	$mlw_bm_four_months_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_four_month_first." 00:00:00' AND '".$mlw_four_month_last." 23:59:59')");
	?>
		<div>
		<div>
			<canvas id="mlw_qmn_monthly_graph_canvas" height="450" width="600"></canvas>
		</div>
			


		<script>
			var mlwBMMonthlyData = {
				labels : ["","","","",""],
				datasets : [
					{
						label: "Monthly Page Views",
						fillColor : "rgba(220,220,220,0.2)",
						strokeColor : "rgba(220,220,220,1)",
						pointColor : "rgba(220,220,220,1)",
						pointStrokeColor : "#fff",
						pointHighlightFill : "#fff",
						pointHighlightStroke : "rgba(220,220,220,1)",
						data : [<?php echo $mlw_bm_views_four_months.",".$mlw_bm_views_three_months.",".$mlw_bm_views_two_months.",".$mlw_bm_views_last_month.",".$mlw_bm_views_this_month; ?>]
					},
					{
						label: "My Second dataset",
						fillColor : "rgba(151,187,205,0.2)",
						strokeColor : "rgba(151,187,205,1)",
						pointColor : "rgba(151,187,205,1)",
						pointStrokeColor : "#fff",
						pointHighlightFill : "#fff",
						pointHighlightStroke : "rgba(151,187,205,1)",
						data : [<?php echo $mlw_bm_four_months_unique.",".$mlw_bm_three_months_unique.",".$mlw_bm_two_months_unique.",".$mlw_bm_last_month_unique.",".$mlw_bm_this_month_unique; ?>]
					}
				]

			}
		</script>
	</div>
	<?php	
}

function mlw_bm_quarterly_view_graph()
{
	//Gather the monthly stats, one variable for each day for the graph
	global $wpdb;	
	$mlw_this_quarter =  mktime(0, 0, 0, date("m")  , date("d")-89, date("Y"));
	$mlw_this_quarter = date("Y-m-d", $mlw_this_quarter);
	$mlw_bm_views_this_quarter = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_quarter." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	$mlw_bm_this_quarter_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_this_quarter." 00:00:00' AND '".date("Y-m-d")." 23:59:59')");
	
	$mlw_last_quarter_first =  mktime(0, 0, 0, date("m")  , date("d")-179, date("Y"));
	$mlw_last_quarter_first = date("Y-m-d", $mlw_last_quarter_first);
	$mlw_last_quarter_last =  mktime(0, 0, 0, date("m")  , date("d")-90, date("Y"));
	$mlw_last_quarter_last = date("Y-m-d", $mlw_last_quarter_last);
	$mlw_bm_views_last_quarter = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_last_quarter_first." 00:00:00' AND '".$mlw_last_quarter_last." 23:59:59')");
	$mlw_bm_last_quarter_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_last_quarter_first." 00:00:00' AND '".$mlw_last_quarter_last." 23:59:59')");
	
	$mlw_two_quarter_first =  mktime(0, 0, 0, date("m")  , date("d")-269, date("Y"));
	$mlw_two_quarter_first = date("Y-m-d", $mlw_two_quarter_first);
	$mlw_two_quarter_last =  mktime(0, 0, 0, date("m")  , date("d")-180, date("Y"));
	$mlw_two_quarter_last = date("Y-m-d", $mlw_two_quarter_last);
	$mlw_bm_views_two_quarters = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_two_quarter_first." 00:00:00' AND '".$mlw_two_quarter_last." 23:59:59')");
	$mlw_bm_two_quarters_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_two_quarter_first." 00:00:00' AND '".$mlw_two_quarter_last." 23:59:59')");
	
	$mlw_three_quarter_first =  mktime(0, 0, 0, date("m")  , date("d")-359, date("Y"));
	$mlw_three_quarter_first = date("Y-m-d", $mlw_three_quarter_first);
	$mlw_three_quarter_last =  mktime(0, 0, 0, date("m")  , date("d")-270, date("Y"));
	$mlw_three_quarter_last = date("Y-m-d", $mlw_three_quarter_last);
	$mlw_bm_views_three_quarters = $wpdb->get_var( "SELECT COUNT(*) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_three_quarter_first." 00:00:00' AND '".$mlw_three_quarter_last." 23:59:59')");
	$mlw_bm_three_quarters_unique = $wpdb->get_var( "SELECT COUNT(DISTINCT ip) FROM " . $wpdb->prefix . "mlw_bm_stats WHERE browser <> 'Robot' AND (visit_time BETWEEN '".$mlw_three_quarter_first." 00:00:00' AND '".$mlw_three_quarter_last." 23:59:59')");
	?>
	<div>
		<div>
			<canvas id="mlw_qmn_quarterly_graph_canvas" height="450" width="600"></canvas>
		</div>
			


		<script>
			var mlwBMQuarterlyData = {
				labels : ["","","",""],
				datasets : [
					{
						label: "Quarterly Page Views",
						fillColor : "rgba(220,220,220,0.2)",
						strokeColor : "rgba(220,220,220,1)",
						pointColor : "rgba(220,220,220,1)",
						pointStrokeColor : "#fff",
						pointHighlightFill : "#fff",
						pointHighlightStroke : "rgba(220,220,220,1)",
						data : [<?php echo $mlw_bm_views_three_quarters.",".$mlw_bm_views_two_quarters.",".$mlw_bm_views_last_quarter.",".$mlw_bm_views_this_quarter; ?>]
					},
					{
						label: "My Second dataset",
						fillColor : "rgba(151,187,205,0.2)",
						strokeColor : "rgba(151,187,205,1)",
						pointColor : "rgba(151,187,205,1)",
						pointStrokeColor : "#fff",
						pointHighlightFill : "#fff",
						pointHighlightStroke : "rgba(151,187,205,1)",
						data : [<?php echo $mlw_bm_three_quarters_unique.",".$mlw_bm_two_quarters_unique.",".$mlw_bm_last_quarter_unique.",".$mlw_bm_this_quarter_unique; ?>]
					}
				]

			}

		window.onload = function(){
			var mlwBMQuarterlyCtx = document.getElementById("mlw_qmn_quarterly_graph_canvas").getContext("2d");
			window.mlwBMQuarterlyGraph = new Chart(mlwBMQuarterlyCtx).Line(mlwBMQuarterlyData, {
				responsive: true
			});
			var mlwBMMonthlyCtx = document.getElementById("mlw_qmn_monthly_graph_canvas").getContext("2d");
			window.mlwBMMonthlyGraph = new Chart(mlwBMMonthlyCtx).Line(mlwBMMonthlyData, {
				responsive: true
			});
			var mlwBMWeeklyCtx = document.getElementById("mlw_qmn_weekly_graph_canvas").getContext("2d");
			window.mlwBMWeeklyGraph = new Chart(mlwBMWeeklyCtx).Line(mlwBMWeeklyData, {
				responsive: true
			});
			var mlwBMDailyCtx = document.getElementById("mlw_qmn_daily_graph_canvas").getContext("2d");
			window.mlwBMDailyGraph = new Chart(mlwBMDailyCtx).Line(mlwBMDailyData, {
				responsive: true
			});
			var mlwBMCountryCtx = document.getElementById("mlw_bm_country_graph").getContext("2d");
				window.mlwBMCountryGraph = new Chart(mlwBMCountryCtx).Pie(mlwBMCountryData);
			var mlwBMBrowserCtx = document.getElementById("mlw_bm_browser_graph").getContext("2d");
				window.mlwBMBrowserGraph = new Chart(mlwBMBrowserCtx).Pie(mlwBMBrowserData);
			var mlwBMPlatformCtx = document.getElementById("mlw_bm_platform_graph").getContext("2d");
				window.mlwBMPlatformGraph = new Chart(mlwBMPlatformCtx).Pie(mlwBMPlatformData);
			var mlwBMPageViewsCtx = document.getElementById("mlw_bm_pageViews_graph").getContext("2d");
				window.mlwBMPageViewsGraph = new Chart(mlwBMPageViewsCtx).Pie(mlwBMPageViewsData);
			var mlwBMReferrerCtx = document.getElementById("mlw_bm_referrer_graph").getContext("2d");
				window.mlwBMReferrerGraph = new Chart(mlwBMReferrerCtx).Pie(mlwBMReferrerData);
		}


		</script>
	</div>
	<?php	
}


function mlw_bm_services()
{
	?>
	<div>
		<h2>Plugin Premium Support</h2>
		<p>Plugin Premium Support includes priority response, priority feature requests, access to premium support-only forums, and access to WordPress training videos through wp101.</p>
		<p>Up to 1 hour of consultation and training included during 1st month.</p>
		<hr />
		<h2>Plugin Installation Services</h2>
		<p>We will install any or all of our WordPress plugins on your existing WordPress site. This includes 1 year access to premium support-only forums.</p>
		<p>Up to 2 hours of consultation and training included.</p>
		<hr />
		<h2>WordPress Maintenance Services</h2>
		<p>Our maintenance service includes around the clock security monitoring, off-site backups, plugin updates, theme updates, WordPress updates, and WordPress training videos.</p>
		<p>Our Premium Plugin Support is included!</p>
		<p>Up to 30 minutes of support, consultation, and training included each month.</p>
		<br />
		<p>Visit our <a href="http://mylocalwebstop.com/services/" target="_blank" style="color:blue;">services</a> page for details.</p>
	</div>
	<?php
}


function mlw_bm_wpss_mrt_meta_box3()
{
	$mlw_bm_email_message = "";
	$mlw_bm_version = get_option('mlw_bm_version');
	if(isset($_POST["action"]))
	{
		$mlw_bm_email_success = $_POST["action"];
		$mlw_bm_user_name = $_POST["username"];
		$mlw_bm_user_email = $_POST["email"];
		$mlw_bm_user_message = $_POST["message"];
		$mlw_bm_current_user = wp_get_current_user();
		$mlw_bm_site_name = get_bloginfo('name');
		$mlw_bm_site_url = get_bloginfo('url');
		$mlw_bm_site_version = get_bloginfo('version');
		$mlw_bm_site_info = $mlw_bm_site_name." ".$mlw_bm_site_url." ".$mlw_bm_site_version;
		if ($mlw_bm_email_success == 'update')
		{
			$mlw_bm_message = "Message from ".$mlw_bm_user_name." at ".$mlw_bm_user_email." It says: \n \n ".$mlw_bm_user_message."\n Version: ".$mlw_bm_version."\n User ".$mlw_bm_current_user->display_name." from ".$mlw_bm_current_user->user_email."\n Wordpress Info: ".$mlw_bm_site_info;
			wp_mail('fpcorso@mylocalwebstop.com' ,'Support From Business Master Plugin', $mlw_bm_message);
			$mlw_bm_email_message = "**Message Sent**";
		}
	}
	?>
	<div class='mlw_bm_email_support'>
	<form action="" method='post' name='emailForm' onsubmit='return mlw_bm_validateForm()'>
	<input type='hidden' name='action' value='update' />
	<table>
	<tr>
	<td>If there is something you would like to suggest to add or even if you just want 
	to let me know if you like the plugin or not, feel free to use the email form below.</td>
	</tr>
	<tr>
	<td><span name='mlw_bm_support_message' id='mlw_bm_support_message' style="color: red;"><?php echo $mlw_bm_email_message; ?></span></td>
	</tr>
	<tr>
	<td align='left'><span style='font-weight:bold;';>Name (Required): </span></td>
	</tr>
	<tr>
	<td><input type='text' name='username' value='' /></td>
	</tr>
	<tr>
	<td align='left'><span style='font-weight:bold;';>Email (Required): </span></td>
	</tr>
	<tr>
	<td><input type='text' name='email' value='' /></td>
	</tr>
	<tr>
	<td align='left'><span style='font-weight:bold;';>Message (Required): </span></td>
	</tr>
	<tr>
	<td align='left'><TEXTAREA NAME="message" COLS=40 ROWS=6></TEXTAREA></td>
	</tr>
	<tr>
	<td align='left'><input type='submit' value='Send Email' /></td>
	</tr>
	<tr>
	<td align='left'></td>
	</tr>
	</table>
	</form>
	<p>Disclaimer: In order to better assist you, this form will also send some useful information about your WordPress installation such as version of plugin, version of WordPress, and website url along with your message.</p>
	</div>
	<?php
}

function mlw_bm_wpss_mrt_meta_box4()
{
	?>
	<div>
	<table width='100%'>
	<tr>
	<td align='left'>
	Business Master is and always will be a free plugin. I have spent a lot of time and effort developing and maintaining this plugin. If it has been beneficial to your site, please consider supporting this plugin by making a donation.
	</td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td>
	<div class="donation">
	<p>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="RTGYAETX36ZQJ">
	<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>
	</p>
	</div>
	</td>
	</tr>
	</table>
	</div>
	<?php
}
function mlw_bm_wpss_mrt_meta_box5()
{
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
	?>
	<div>
	<table width='100%'>
	<tr>
	<td align='left'><iframe src="http://www.mylocalwebstop.com/mlw_news.html?cache=<?php echo rand(); ?>&site=<?php echo $mlw_site_url; ?>" seamless="seamless" style="width: 100%; height: 550px;"></iframe></td>
	</tr>
	</table>
	</div>
	<?php
}
?>
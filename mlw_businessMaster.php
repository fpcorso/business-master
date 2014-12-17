<?php

/*
Plugin Name: Business Master
Description: The ultimate plugin for businesses.
Version: 0.2.0
Author: Frank Corso
Author URI: http://www.mylocalwebstop.com/
Plugin URI: http://www.mylocalwebstop.com/
*/

/* 
Copyright 2014, My Local Webstop (email : fpcorso@mylocalwebstop.com)

Disclaimer of Warranties. 

The plugin is provided "as is". My Local Webstop and its suppliers and licensors hereby disclaim all warranties of any kind, 
express or implied, including, without limitation, the warranties of merchantability, fitness for a particular purpose and non-infringement. 
Neither My Local Webstop nor its suppliers and licensors, makes any warranty that the plugin will be error free or that access thereto will be continuous or uninterrupted.
You understand that you install, operate, and unistall the plugin at your own discretion and risk.
*/


///Files to Include
include("includes/mlw_bm_dashboard.php");
include("includes/mlw_bm_install.php");
include("includes/mlw_bm_update.php");
include("includes/mlw_bm_collect_stats.php");
include("includes/bm_dashboard_widgets.php");


///Activation Actions
add_action('admin_menu', 'mlw_bm_add_menu');
add_action('wp_footer', 'mlw_bm_get_stats_action');
add_action('admin_init', 'mlw_bm_update');
register_activation_hook( __FILE__, 'mlw_bm_activate');
register_deactivation_hook( __FILE__, 'mlw_bm_deactivate');

//Setup Translations
function mlw_bm_translation_setup() {
  load_plugin_textdomain( 'mlw_bm_text_domain', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
}
add_action('plugins_loaded', 'mlw_bm_translation_setup');


///Create Admin Pages
function mlw_bm_add_menu()
{
	if (function_exists('add_menu_page'))
	{
		add_menu_page('Business Master', 'Business Master', 'manage_options', __FILE__, 'mlw_bm_generate_dashboard_page');
	}
}

function mlw_bm_show_adverts()
{
	$mlw_advert = "";
	$mlw_advert_text = "";
	if ( get_option('mlw_advert_shows') == 'true' )
	{
		$mlw_random_int = rand(0, 5);
		switch ($mlw_random_int) {
			case 0:
				$mlw_advert_text = "Need support or features? Check out our Premium Support options! Visit our <a href=\"http://mylocalwebstop.com/shop/\">WordPress Store</a> for details!";
				break;
			case 1:
				$mlw_advert_text = "Is Business Master beneficial to your website? Please help by giving us a review on WordPress.org by going <a href=\"http://wordpress.org/support/view/plugin-reviews/testimonial-master\">here</a>!";
				break;
			case 2:
				$mlw_advert_text = "Want help installing and configuring one of our plugins? Check out our Plugin Installation services. Visit our <a href=\"http://mylocalwebstop.com/shop/\">WordPress Store</a> for details!";
				break;
			case 3:
				$mlw_advert_text = "Would you like to support this plugin but do not need or want premium support? Please consider our inexpensive 'Advertisements Be Gone' add-on which will get rid of these ads. Visit our <a href=\"http://mylocalwebstop.com/shop/\">Plugin Add-On Store</a> for details!";
				break;
			case 4:
				$mlw_advert_text = "Need help keeping your plugins, themes, and WordPress up to date? Want around the clock security monitoring and off-site back-ups? How about WordPress training videos, a monthly status report, and support/consultation? Check out our <a href=\"http://mylocalwebstop.com/wordpress-maintenance-services/\">WordPress Maintenance Services</a> for more details!";
				break;
			case 5:
				$mlw_advert_text = "Setting up a new site? Let us take care of the set-up so you back to running your business. Check out our <a href=\"http://mylocalwebstop.com/shop/\">WordPress Store</a> for more details!";
				break;
			default:
				$mlw_advert_text = "Need support or features? Check out our Premium Support options! Visit our <a href=\"http://mylocalwebstop.com/shop/\">Plugin Add-On Store</a> for details!";
		}
		$mlw_advert .= "
			<style>
			div.help_decide
			{
				display: block;
				text-align:center;
				letter-spacing: 1px;
				margin: auto;
				text-shadow: 0 1px 1px #000000;
				background: #0d97d8;
				border: 5px solid #106daa;
				-moz-border-radius: 20px;
				-webkit-border-radius: 20px;
				-khtml-border-radius: 20px;
				border-radius: 20px;
				color: #FFFFFF;
			}
			div.help_decide a
			{
				color: yellow;
			}		
			</style>";
		$mlw_advert .= "
			<div class=\"help_decide\">
			<p>$mlw_advert_text</p>
			</div>";
	}
	return $mlw_advert;	
}
/*


*/
?>

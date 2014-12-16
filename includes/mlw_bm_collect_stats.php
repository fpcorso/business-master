<?php

function mlw_bm_get_stats_action()
{
	//Only gather stats from anyone not an admin
	if ( !current_user_can( 'manage_options' ) )
	{
		//We do not need to gather stats from ajax calls or other times our own server pings the site
		if (isset($_SERVER['REMOTE_ADDR']) && isset($_SERVER['SERVER_ADDR']) && $_SERVER['REMOTE_ADDR'] == $_SERVER['SERVER_ADDR'])
		{
			return false;
		}
		//Gather the variables and information
		isset($_SERVER['REMOTE_ADDR']) ? $mlw_bm_ip = $_SERVER['REMOTE_ADDR'] : $mlw_bm_ip = "Unknown";
		isset($_SERVER['HTTP_REFERER']) ? $mlw_bm_referrer = $_SERVER['HTTP_REFERER'] : $mlw_bm_referrer = "None";
		isset($_SERVER['HTTP_USER_AGENT']) ? $mlw_bm_user_comp_info = $_SERVER['HTTP_USER_AGENT'] : $mlw_bm_user_comp_info = "Unknown";
		isset($_SERVER['REQUEST_URI']) ? $mlw_bm_current_page = $_SERVER['REQUEST_URI'] : $mlw_bm_current_page = "Unknown";
		$mlw_bm_country  = "Unknown";
		
		//Search the User Agent for browser
		if ( stripos($mlw_bm_user_comp_info, 'Firefox') !== false ) {
			$mlw_bm_browser = 'Firefox';
		} elseif ( stripos($mlw_bm_user_comp_info, 'MSIE') !== false || stripos($mlw_bm_user_comp_info, 'Trident/7.0') !== false ) {
			$mlw_bm_browser = 'Internet Explorer';
		} elseif ( stripos($mlw_bm_user_comp_info, 'Opera') !== false ) {
			$mlw_bm_browser = 'Opera';
		} elseif ( stripos($mlw_bm_user_comp_info, 'iPad') !== false ) {
			$mlw_bm_browser = 'iPad';
		} elseif ( stripos($mlw_bm_user_comp_info, 'iPhone') !== false ) {
			$mlw_bm_browser = 'iPhone';
		} elseif ( stripos($mlw_bm_user_comp_info, 'Android') !== false ) {
			$mlw_bm_browser = 'Android';
		} elseif ( stripos($mlw_bm_user_comp_info, 'BlackBerry') !== false ) {
			$mlw_bm_browser = 'BlackBerry';
		} elseif ( stripos($mlw_bm_user_comp_info, 'Chrome') !== false ) {
			$mlw_bm_browser = 'Chrome';
		} elseif ( stripos($mlw_bm_user_comp_info, 'Chimera') !== false ) {
			$mlw_bm_browser = 'Chimera';
		} elseif ( stripos($mlw_bm_user_comp_info, 'Safari') !== false ) {
			$mlw_bm_browser = 'Safari';
		} elseif ( stripos($mlw_bm_user_comp_info, 'PaleMoon') !== false ) {
			$mlw_bm_browser = 'PaleMoon';
		} elseif ( stripos($mlw_bm_user_comp_info, 'SeaMonkey') !== false ) {
			$mlw_bm_browser = 'SeaMonkey';
		} elseif ( stripos($mlw_bm_user_comp_info, 'Googlebot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'XoviBot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'NerdyBot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'YandexBot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'Baiduspider') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'DotBot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'Yahoo! Slurp') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'Twitterbot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'bingbot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'CCBot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'Sogou web spider') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'SMTBot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'SeznamBot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'SiteExplorer') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'meanpathbot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'CrawlBot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'Exabot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'ContextAd Bot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'GrapeshotCrawler') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'NetSeer crawler') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'AlphaBot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, '200PleaseBot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'spbot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'PWBot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'archive.org_bot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, '007ac9 Crawler') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'A6-Indexer') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'Riddler') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'Icarus6j') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'Mail.RU_Bot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'oBot') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'proximic') !== false ) {
			$mlw_bm_browser = 'Robot';
		} elseif ( stripos($mlw_bm_user_comp_info, 'linkdexbot') !== false ) {
			$mlw_bm_browser = 'linkdexbot';
		} else {
			$mlw_bm_browser = 'Other';
		}
	   	//Search the User Agent for OS
	   	if ( stripos($mlw_bm_user_comp_info, 'Windows') !== false ) {
	            $mlw_bm_platform = 'Windows';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'Chrome OS') !== false ) {
	            $mlw_bm_platform = 'Chrome OS';
			} elseif ( stripos($mlw_bm_user_comp_info, 'CrOS') !== false ) {
	            $mlw_bm_platform = 'Chrome OS';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'Android') !== false ) {
	            $mlw_bm_platform = 'Android';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'iPad') !== false ) {
	            $mlw_bm_platform = 'iOS';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'iPhone') !== false ) {
	            $mlw_bm_platform = 'iOS';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'Mac OS') !== false ) {
	            $mlw_bm_platform = 'Mac';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'Linux') !== false ) {
	            $mlw_bm_platform = 'Linux';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'Googlebot') !== false ) {
	            $mlw_bm_platform = 'Googlebot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'XoviBot') !== false ) {
	            $mlw_bm_platform = 'XoviBot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'NerdyBot') !== false ) {
	            $mlw_bm_platform = 'NerdyBot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'YandexBot') !== false ) {
	            $mlw_bm_platform = 'YandexBot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'Baiduspider') !== false ) {
	            $mlw_bm_platform = 'Baiduspider';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'DotBot') !== false ) {
	            $mlw_bm_platform = 'DotBot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'Yahoo! Slurp') !== false ) {
	            $mlw_bm_platform = 'Yahoo! Slurp';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'Twitterbot') !== false ) {
	            $mlw_bm_platform = 'Twitterbot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'bingbot') !== false ) {
	            $mlw_bm_platform = 'bingbot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'CCBot') !== false ) {
	            $mlw_bm_platform = 'CCBot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'Sogou web spider') !== false ) {
	            $mlw_bm_platform = 'Sogou web spider';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'SMTBot') !== false ) {
	            $mlw_bm_platform = 'SMTBot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'SeznamBot') !== false ) {
	            $mlw_bm_platform = 'SeznamBot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'SiteExplorer') !== false ) {
	            $mlw_bm_platform = 'SiteExplorer';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'meanpathbot') !== false ) {
	            $mlw_bm_platform = 'meanpathbot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'CrawlBot') !== false ) {
	            $mlw_bm_platform = 'CrawlBot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'Exabot') !== false ) {
	            $mlw_bm_platform = 'Exabot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'ContextAd Bot') !== false ) {
	            $mlw_bm_platform = 'ContextAd Bot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'GrapeshotCrawler') !== false ) {
	            $mlw_bm_platform = 'GrapeshotCrawler';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'NetSeer crawler') !== false ) {
	            $mlw_bm_platform = 'NetSeer crawler';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'AlphaBot') !== false ) {
	            $mlw_bm_platform = 'AlphaBot';
	        } elseif ( stripos($mlw_bm_user_comp_info, '200PleaseBot') !== false ) {
	            $mlw_bm_platform = '200PleaseBot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'spbot') !== false ) {
	            $mlw_bm_platform = 'spbot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'PWBot') !== false ) {
	            $mlw_bm_platform = 'PWBot';
	        } elseif ( stripos($mlw_bm_user_comp_info, 'archive.org_bot') !== false ) {
	            $mlw_bm_platform = 'archive.org_bot';
	        } elseif ( stripos($mlw_bm_user_comp_info, '007ac9 Crawler') !== false ) {
	            $mlw_bm_platform = '007ac9 Crawler';
			} elseif ( stripos($mlw_bm_user_comp_info, 'A6-Indexer') !== false ) {
	            $mlw_bm_platform = 'A6-Indexer';
			} elseif ( stripos($mlw_bm_user_comp_info, 'Riddler') !== false ) {
	            $mlw_bm_platform = 'Riddler';
			} elseif ( stripos($mlw_bm_user_comp_info, 'Icarus6j') !== false ) {
	            $mlw_bm_platform = 'Icarus6j';
			} elseif ( stripos($mlw_bm_user_comp_info, 'Mail.RU_Bot') !== false ) {
	            $mlw_bm_platform = 'Mail.RU_Bot';
			} elseif ( stripos($mlw_bm_user_comp_info, 'oBot') !== false ) {
	            $mlw_bm_platform = 'oBot';
			} elseif ( stripos($mlw_bm_user_comp_info, 'proximic') !== false ) {
	            $mlw_bm_platform = 'proximic';
			} elseif ( stripos($mlw_bm_user_comp_info, 'linkdexbot') !== false ) {
	            $mlw_bm_platform = 'linkdexbot';
	        } else {
	        	$mlw_bm_platform = 'Other';
	        }
	
		//Find country for ip
		$mlw_bm_ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$mlw_bm_ip));
		if($mlw_bm_ip_data && $mlw_bm_ip_data->geoplugin_countryName != null)
	    {
	        $mlw_bm_country = $mlw_bm_ip_data->geoplugin_countryName;
	    }
		
		//Store stats into table
	    global $wpdb;
	    $mlw_bm_collect_results = $wpdb->query( $wpdb->prepare( "INSERT INTO ".$wpdb->prefix."mlw_bm_stats (stat_id, page, referrer, browser, platform, ip, country, visit_time) VALUES (NULL, '%s', '%s', '%s', '%s', '%s', '%s', '%s')", $mlw_bm_current_page, $mlw_bm_referrer, $mlw_bm_browser, $mlw_bm_platform, $mlw_bm_ip, $mlw_bm_country, date("Y-m-d H:i:s") ) );		
	    
	    if ($mlw_bm_collect_results)
	    {
	    	?>
			&nbsp;
			<?php
	    }
	    else
	    {
	    	?>
			&nbsp;
			<?php
	    }
	}
}
?>

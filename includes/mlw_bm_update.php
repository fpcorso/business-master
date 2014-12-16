<?php

function mlw_bm_update()
{
	//Update this variable each update. This is what is checked when the plugin is deciding to run the upgrade script or not.
	$data = "0.1.5";
	if ( ! get_option('mlw_bm_version'))
	{
		add_option('mlw_bm_version' , $data);
	}
	elseif (get_option('mlw_bm_version') != $data)
	{
			update_option('mlw_bm_version' , $data);
	}
	if ( ! get_option('mlw_advert_shows'))
	{
		add_option('mlw_advert_shows' , 'true');
	}
}
?>
<?php

class Nsm_morphine_theme_acc 
{
	var $name	 		= 'NSM Morphine theme';
	var $id	 			= 'nsm_morphine_theme';
	var $version	 	= '0.1.0';
	var $description	= 'Accessory for NSM Morphine theme.';
	var $sections	 	= array();

	/**
	* Set Sections
	*
	* Set content for the accessory
	*
	* @access	public
	* @return	void
	*/
	function set_sections()
	{
		$EE =& get_instance();

		$theme_folder_url = $EE->config->item('theme_folder_url');
		
		if (substr($theme_folder_url, -1) != '/')
			$theme_folder_url .= '/';

		if($theme = $EE->config->item('member_theme'))
			$theme .= "/";

		$theme_folder_url .= "cp_themes/" . $theme . "nsm_morphine/";

		$EE->cp->add_to_head('<link rel="stylesheet" type="text/css" href="'.$theme_folder_url.'css/screen.css" />');
		$EE->cp->add_to_foot('<script type="text/javascript" charset="utf-8" src="'.$theme_folder_url.'javascript/navigation.js"></script>');

		$this->sections[] = '<script type="text/javascript" charset="utf-8">$("#accessoryTabs a.nsm_morphine_theme").parent().remove();</script>';
	}
}
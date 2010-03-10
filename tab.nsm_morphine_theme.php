<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(E_ALL);
/**
 * undocumented class
 *
 * @package default
 * @author Leevi Graham
 **/
class Nsm_morphine_theme_tab
{
	public function __construct(){}
	
	/**
	 * Add tabs to the publish page
	 *
	 * @param $channel_id int The channel id
	 * @param $entry_id mixed The entry id if the entry already exists, FALSE if a new entry
	 * @return array The fields inside the tab
	 */
	public function publish_tabs($channel_id, $entry_id = FALSE)
	{
		$field_settings[] = array(
					'field_id'             => 'nsm_morphine_theme',
					'field_label'          => "NSM Morphine Theme",
					'field_required'       => 'n',
					'field_data'           => '',
					'field_list_items'     => '',
					'field_fmt'            => '',
					'field_instructions'   => '',
					'field_show_fmt'       => 'n',
					'field_pre_populate'   => 'n',
					'field_text_direction' => 'ltr',
					'field_type'           => 'nsm_morphine_theme'
				);

		return $field_settings;
	}

	/**
	 * Validates the submitted data
	 *
	 * @return boolean TRUE if the data is valid, FALSE if invalid
	 */
	public function validate_publish()
	{
		return TRUE;
	}

	/**
	 * Manipulate the data after the entry has been submitted.
	 * 
	 * The publish data function allows you to manipulate the submitted data after the main data entry has occurred. Typically this will involve creating a record. The single parameter is an associative array, the top level arrays consisting of: 'meta', 'data', 'mod_data', and 'entry_id'.
	 * 
	 * @param array $params Contains the entry and module data
	 * @return void
	 * @author Leevi Graham
	 **/
	public function publish_data_db($params)
	{
	}

	/**
	 * Delete data when entry is deleted.
	 * 
	 * This function is called when entries are deleted, and allows you to synchronize your module tables and make any other adjustments necessary when an entry that may be associated with module data is deleted.
	 *
	 * @return void
	 * @author Leevi Graham
	 */
	public function publish_data_delete_db($params)
	{
	}
} // END publiclass
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Install / Uninstall and update NSM Morphine Theme module
 *
 * @package NsmMorphineTheme
 * @author Leevi Graham
 **/
class Nsm_morphine_theme_upd
{
	public $version = '2.0.0';
	static $has_cp_backend = FALSE;
	static $has_publish_fields = FALSE;
	static $has_tabs = FALSE;
	private $tabs = array("NSM Morphine Theme" => array(
		"NSM Morphine theme tables" => array(
			'visible'		=> 'true',
			'collapse'		=> 'false',
			'htmlbuttons'	=> 'false',
			'width'			=> '100%'
		))
	);

	public function __construct() 
	{ 
		$this->EE =& get_instance();
	}    

	/**
	 * Installs the module
	 * 
	 * Installs the module, adding a record to the exp_modules table, creates and populates and necessary database tables, adds any necessary records to the exp_actions table, and if custom tabs are to be used, adds those fields to any saved publish layouts
	 *
	 * @return boolean
	 * @author Leevi Graham
	 **/
	public function install()
	{
		$data = array(
			'module_name' => substr(__CLASS__, 0, -4),
			'module_version' => $this->version,
			'has_cp_backend' => (self::$has_cp_backend) ? "y" : "n",
			'has_publish_fields' => (self::$has_publish_fields) ? "y" : "n"
		);
		$this->EE->db->insert('modules', $data);

		if($this->has_tabs)
			$this->EE->cp->add_layout_tabs($this->tabs, $data['module_name']);

		return TRUE;
	}

	/**
	 * Updates the module
	 * 
	 * This function is checked on any visit to the module's control panel, and compares the current version number in the file to the recorded version in the database. This allows you to easily make database or other changes as new versions of the module come out.
	 *
	 * @return Boolean FALSE if no update is necessary, TRUE if it is.
	 * @author Leevi Graham
	 **/
	public function update($current = FALSE)
	{
		return FALSE;
	}

	/**
	 * Uninstalls the module
	 *
	 * @return Boolean FALSE if uninstall failed, TRUE if it was successful
	 * @author Leevi Graham
	 **/
	public function uninstall()
	{

		$module_name = substr(__CLASS__, 0, -4);

		$this->EE->db->select('module_id');
		$query = $this->EE->db->get_where('modules', array('module_name' => $module_name));

		$this->EE->db->where('module_id', $query->row('module_id'));
		$this->EE->db->delete('module_member_groups');

		$this->EE->db->where('module_name', $module_name);
		$this->EE->db->delete('modules');

		$this->EE->db->where('class', $module_name);
		$this->EE->db->delete('actions');

		$this->EE->db->where('class', $module_name . "_mcp");
		$this->EE->db->delete('actions');

		if($this->has_tabs)
			$this->EE->cp->delete_layout_tabs($this->tabs, $module_name);

		return TRUE;
	}

} // END class Nsm_morphine_theme_upd
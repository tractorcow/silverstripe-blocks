<?php


/**
 * @author Damo
 * 
 * @package projectname
 * @subpackage pages
 */
class Page extends SiteTree {

	private static $db = array (
		'ShowInFooterNavigation' => 'Boolean'
	);
	
	private static $many_many = array(
		'FooterModules' => 'FooterModule'
	);

	private static $many_many_extraFields = array(
		'FooterModules' => array(
			'SortOrder' => 'Int'
		)
	);

	public function getSettingsFields() { 
      	$fields = parent::getSettingsFields(); 
        $fields->addFieldToTab("Root.Settings", new CheckBoxField('ShowInFooterNavigation', 'Show in footer?'), 'ShowInSearch');
        return $fields;
    }

    public function getCMSFields(){
    	$fields = parent::getCMSFields();
    	$config = GridFieldConfig_Custom::create();
    	$config->addSortable('SortOrder');
    	$gridField = new GridField('FooterModules', 'FooterModules', $this->FooterModules(null, 'SortOrder'), $config);
    	$fields->addFieldToTab("Root.WhatCanWeDoForYou", $gridField);
    	return $fields;
    }
}


/**
 * @author Damo
 * 
 * @package projectname
 * @subpackage pages
 */
class Page_Controller extends ContentController {
	
	public function init() {
		parent::init();
		Requirements::javascript(THIRDPARTY_DIR . '/jquery/jquery.min.js');
		
		// Please use Requirements::combine_files() where possible
	}

	public function getFooterLinks(){
		return Page::get()->filter(array('ShowInFooterNavigation' => '1'));
	}
}

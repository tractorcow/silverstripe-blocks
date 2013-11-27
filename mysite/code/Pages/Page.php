<?php


/**
 * @author Damo
 * 
 * @package projectname
 * @subpackage pages
 */
class Page extends SiteTree {

	private static $db = array (
		'ShowInFooterNavigation' => 'Boolean',
		'HideFromBreadcrumb' => 'Boolean'
	);

	private static $has_one = array (
		'MainImage' => 'Image'
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
        $fields->addFieldToTab("Root.Settings", new CheckBoxField('HideFromBreadcrumb', 'Hide page name in breadcrumbs if current page'));
        return $fields;
    }

    public function getCMSFields(){
    	$fields = parent::getCMSFields();
    	$fields->removeByName("GoogleAnalytics");
    	$config = GridFieldConfig_Custom::create();
    	$config->addSortable('SortOrder');
    	$config->addRelationHandling();
    	$gridField = new GridField('FooterModules', 'FooterModules', $this->FooterModules(null, 'SortOrder'), $config);
    	$fields->addFieldToTab("Root.MainImage", new UploadField('MainImage'));
    	$fields->addFieldToTab("Root.WhatCanWeDoForYou", $gridField);
    	return $fields;
    }

    // Placehold.it function for template build
	public function PlaceholdIt($width, $height, $text){
		$text = str_replace(" ", "+", $text);
		return '<img width="'.$width.'" height="'.$height.'" src="http://placehold.it/'.$width.'x'.$height.'&text='.$text.'" />';
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
		Requirements::javascript('mysite/javascript/jquery.cycle2.min.js');
		Requirements::javascript('mysite/javascript/jquery.easyResponsiveTabs.js');
		Requirements::javascript('mysite/javascript/giltrap.script.js');
		// Please use Requirements::combine_files() where possible
	}

	public function getFooterLinks(){
		return Page::get()->filter(array('ShowInFooterNavigation' => '1'));
	}

}

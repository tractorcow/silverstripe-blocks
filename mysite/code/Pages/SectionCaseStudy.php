<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages
 *
 *
 */

class SectionCaseStudy extends SectionContent {

	private static $has_many = array(
		'MediaItems' => 'MediaItem',
	);

	public function getCMSFields(){
    	$fields = parent::getCMSFields();
    	
    	$fields->removeByName("Images");
    	$fields->removeByName("ImageAlign");

    	$config = GridFieldConfig_Custom::create();
        // What is the type name?
        //$config->removeComponentByType();
    	$gridField = new GridField('MediaItems', 'MediaItems', $this->MediaItems(), $config);
    	$fields->addFieldToTab("Root.MediaGallery", $gridField);
    	
    	return $fields;
    }
}

class SectionCaseStudy_Controller extends SectionContent_Controller {	

}
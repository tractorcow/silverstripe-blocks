<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages
 */
class CaseStudy extends Page {

	private static $db = array(
		'Intro' => 'Text',
		'Abstract' => 'Text',
		'ShowOnHomePage' => 'Boolean'
	);

	private static $has_one = array(
		'HomePageImage' => 'Image'
	);

	public function getCMSFields(){
    	$fields = parent::getCMSFields();
    	$fields->addFieldToTab("Root.Main", new CheckboxField('ShowOnHomePage'), 'Content');
    	$fields->addFieldToTab("Root.Main", new TextareaField('Intro'), 'Content');
    	$fields->addFieldToTab("Root.Main", new TextareaField('Abstract'), 'Content');
    	$fields->addFieldToTab("Root.HomePageImage", new UploadField('HomePageImage', 'This image will appear on the homepage if "Show on Home Page" is checked'));
    	return $fields;
    }
}

class CaseStudy_Controller extends Page_Controller {	
}
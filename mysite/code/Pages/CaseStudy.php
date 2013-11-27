<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages
 */
class CaseStudy extends Page {

	private static $allowed_children = "none";
  	private static $can_be_root = false;

	private static $db = array(
		'Region' => 'Text',
		'Country' => 'Text',
		'Intro' => 'Text',
		'Abstract' => 'Text',
		'Person' => 'Text',
		'ShowOnHomePage' => 'Boolean'
	);

	private static $has_one = array(
		'HomePageImage' => 'Image'
	);

	public function getCMSFields(){
    	$fields = parent::getCMSFields();
    	$fields->addFieldToTab("Root.Main", new TextField('Region'), 'Content');
    	$fields->addFieldToTab("Root.Main", new TextField('Country'), 'Content');
    	$fields->addFieldToTab("Root.Main", new CheckboxField('ShowOnHomePage'), 'Content');
    	$fields->addFieldToTab("Root.Main", new TextField('Person', 'First and Last Name'), 'Content');
    	$fields->addFieldToTab("Root.Main", new TextareaField('Intro'), 'Content');
    	$fields->addFieldToTab("Root.Main", new TextareaField('Abstract'), 'Content');
    	$fields->addFieldToTab("Root.HomePageImage", new UploadField('HomePageImage', 'This image will appear on the homepage if "Show on Home Page" is checked'));
    	
    	// Remove all the fields
	    $fields->removeByName("MainImage");

    	return $fields;
    }

    public function getFirstName(){
    	if($this->Person){
    		list($firstname, $lastname) = explode(" ", $this->Person);
    		return $firstname;
    	}
    	else {
    		return false;
    	}
    }

    // Get possessive of case study protangist's First Name
   	public function getPossessive(){
   		$string = $this->getFirstName();
   		return $string.'\''.($string[strlen($string) - 1] != 's' ? 's' : '');
   	}
}

class CaseStudy_Controller extends Page_Controller {	
}
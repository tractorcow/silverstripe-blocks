<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages
 */
class SectionPage extends Page {

	private static $allowed_children = array("SectionContent");

	private static $has_many = array(
		'Person' => 'Person'
	);

	public function getCMSFields(){
	    $fields = parent::getCMSFields();
	    $fields->removeFieldFromTab("Root.Main","Content");
	    return $fields;
  	}  
}

class SectionPage_Controller extends Page_Controller {	
	
	public function init() {
    	parent::init();
  	}

  	public function getSections(){
		$sections = SectionContent::get()->filter(array('ParentID' => $this->ID, 'ClassName' => 'SectionContent'));
		return $sections;
  	}

  	public function getCaseStudies(){
  		$sections = SectionCaseStudy::get()->filter(array('ParentID' => $this->ID));
  		return $sections;
  	}
}
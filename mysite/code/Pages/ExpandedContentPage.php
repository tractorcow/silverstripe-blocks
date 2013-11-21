<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages
 */
class ExpandedContentPage extends Page {

	private static $allowed_children = array("ExpandedContentSection");

	public function getCMSFields(){
	    $fields = parent::getCMSFields();
	    $fields->removeFieldFromTab("Root.Main","Content");
	    return $fields;
  	}  
}

class ExpandedContentPage_Controller extends Page_Controller {	
}
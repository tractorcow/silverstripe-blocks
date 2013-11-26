<?php
/**
 * @author prij
 * adapted from purplespider / silverstripe-mypswd-tweaks 
 *
 * @package giltrap
 * @subpackage pages
 */

class RedirectToFirstChild extends Page {

	static $description = "Redirects to the first child of this page";
	
	public function getCMSFields() {
    	$fields = parent::getCMSFields();
 		
 		$fields->addFieldToTab("Root.Main", new LiteralField("Desc","<h2>First Child Redirect Page</h2><p>This page automatically redirects to its first child page.</p>"));
		$fields->removeFieldFromTab("Root.Main","Content");
 		
		return $fields;
   }
		
}

class RedirectToFirstChild_Controller extends Page_Controller {
 	
 	function  init() {
	    parent::init();
	 
	    if($this->Children()->Count()){
	        Controller::redirect($this->Children()->First()->AbsoluteLink());
	    }
	}
 
}

?>
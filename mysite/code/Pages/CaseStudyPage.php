<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages
 */
class CaseStudyPage extends Page {
	
	private static $allowed_children = array("CaseStudy");
}

class CaseStudyPage_Controller extends Page_Controller {	
	// Redirect to first child
}
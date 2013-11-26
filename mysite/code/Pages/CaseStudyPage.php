<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages
 */
class CaseStudyPage extends RedirectToFirstChild {
	private static $allowed_children = array("CaseStudy");
}

class CaseStudyPage_Controller extends RedirectToFirstChild_Controller {	
}
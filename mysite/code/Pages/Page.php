<?php


/**
 * @author Damo
 * 
 * @package projectname
 * @subpackage pages
 */
class Page extends SiteTree {
	
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
}

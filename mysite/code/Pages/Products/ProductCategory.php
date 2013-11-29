<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages/products
 *
 *
 */

class ProductCategory extends Page {
	private static $allowed_children = array("ProductCategory","ProductDetail");
}

class ProductCategory_Controller extends Page_Controller {	
	function  init() {
	    parent::init();
	 
	    if($this->Children()->Count()){
	        Controller::redirect($this->Children()->First()->AbsoluteLink());
	    }
	}
}
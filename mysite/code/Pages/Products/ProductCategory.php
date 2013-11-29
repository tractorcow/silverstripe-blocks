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

	// Check if this category has subcategories underneath it
	public function HasSubCat(){
		if($this->ClassName == $this->Children()->First()->ClassName){
			return true;
		}
		else {
			return false;
		}
	}
}

class ProductCategory_Controller extends Page_Controller {	
	function  init() {
	    parent::init();
	 
	    if($this->Children()->Count()){
	        Controller::redirect($this->Children()->First()->AbsoluteLink());
	    }
	}
}
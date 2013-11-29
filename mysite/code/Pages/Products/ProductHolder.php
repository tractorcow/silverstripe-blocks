<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages/products
 *
 *
 */

class ProductHolder extends RedirectToFirstChild {
	private static $allowed_children = array("ProductLanding");

	public function onAfterWrite(){
    	parent::onAfterWrite();
    	$this->URLSegment = 'products';
  	}
}

class ProductHolder_Controller extends RedirectToFirstChild_Controller {	
}
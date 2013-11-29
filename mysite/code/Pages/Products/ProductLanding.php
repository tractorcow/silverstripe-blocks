<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages/products
 *
 *
 */

class ProductLanding extends Page {
	private static $allowed_children = array("ProductCategory","ProductDetail");
}

class ProductLanding_Controller extends Page_Controller {	
}
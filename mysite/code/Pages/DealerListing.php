<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages
 */
class DealerListing extends Page {

	private static $has_many = array(
  		"OfficeAddresses" => "OfficeAddress",
  		"Dealers" => "Dealer",
    );

    // Get Countries
    // Needs to be saved somewhere - countries and regions, probably in a dataobject?
}

class DealerListing_Controller extends Page_Controller {	
}
<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages
 */
class DealerListing extends Page {

	private static $has_many = array(
  		'OfficeAddresses' => 'OfficeAddress',
  		'Dealers' => 'Dealer',
    );

    public function getCMSFields(){
    	$fields = parent::getCMSFields();
    	
    	$config = GridFieldConfig_Custom::create();
    	$gridField = new GridField('OfficeAddresses', 'OfficeAddresses', $this->OfficeAddresses(), $config);
    	
    	// #TODO: Is there a cleaner way to do
    	$fields->insertBefore(new Tab('OfficeAddresses'), 'WhatCanWeDoForYou');
    	$fields->addFieldToTab("Root.OfficeAddresses", $gridField);
    	return $fields;
    }
}

class DealerListing_Controller extends Page_Controller {	
}
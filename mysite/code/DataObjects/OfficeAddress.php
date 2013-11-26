<?php
/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 */

class OfficeAddress extends DataObject {
	private static $db = array(
		'Country' => 'Text',
        'Region' => 'Text',
		'Title' => 'Text',
		'Address' => 'Text',
		'MainOffice' => 'Boolean',
    );

    private static $has_many = array(
  		"AdditionalContactInfo" => "AdditionalContactInfo"
    );

    private static $has_one = array(
    	'DealerListing' => 'DealerListing',
    );
}
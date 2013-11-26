<?php
/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 */

class AddressCountry extends DataObject {
	private static $db = array(
		'Title' => 'Text',
    );

    private static $has_many = array(
  		"Regions" => "Region"
    );
}
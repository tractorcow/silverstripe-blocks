<?php
/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 */

class AddressRegion extends DataObject {
	private static $db = array(
		'Title' => 'Text',
    );

    private static $has_one = array(
  		"AddressCountry" => "AddressCountry",
    );
}
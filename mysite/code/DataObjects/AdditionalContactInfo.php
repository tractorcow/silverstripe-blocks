<?php
/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 */

class AdditionalContactInfo extends DataObject {
	private static $db = array(
		'Title' => 'Text',
		'Description' => 'Text',
		'IsEmail' => 'Boolean'
    );

    private static $has_one = array(
  		"OfficeAddress" => "OfficeAddress"
    );

    public function getCMSFields() {
    	return new FieldList(
    		new TextField('Title'),
    		new TextField('Description', 'Details')
    	);
    }
}
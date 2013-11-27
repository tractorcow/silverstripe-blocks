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
    	'DealerListing' => 'DealerListing'
    );

    public function getCMSFields() {
        //make a dropdown out of AddressCountry::get();
        $fields = parent::getCMSFields();
        $fields->removeByName('DealerListingID');
        $fields->addFieldToTab('Root.Main', new TextField('Title'));
        //$fields->addFieldToTab('Root.Main', new DropdownField('Country', 'Country', AddressCountry::get()));
        $fields->addFieldToTab('Root.Main', new TextField('Region'));
        $fields->addFieldToTab('Root.Main', new TextareaField('Address'));
        $fields->addFieldToTab('Root.Main', new CheckboxField('MainOffice', 'This is the Main Office'));
        return $fields;
    }
}
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
		'Country' => 'Int',
        'Region' => 'Int',
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
        $countries = AddressCountry::get()->map("ID", "Title");
        $regions = AddressRegion::get()->filter(array('AddressCountryID' => $this->Country))->map("ID", "Title");

        $fields = new FieldList();

        $fields->push(new TextField('Title'));
        $fields->push(new DropdownField('Country', 'Country', $countries));
        
        if($this->Country){            
            $fields->push(new DropdownField('Region', 'Region', $regions));
            $fields->push(new TextareaField('Address'));
            $fields->push(new CheckboxField('MainOffice', 'This is the Main Office'));
        }
        
        return $fields;
    }
}
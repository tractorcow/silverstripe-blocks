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
		'Locale' => 'Text',
    );

    private static $has_many = array(
    	'AddressRegion' => 'AddressRegion'
    );

    public function getCMSFields() {
        $locales = array_combine(Fluent::locales(),Fluent::locales());

        $config = GridFieldConfig_Custom::create();
        $gridField = new GridField('AddressRegion', 'AddressRegion', $this->AddressRegion(), $config);
    	
        return new FieldList(
    		new TextField('Title'),
    		DropdownField::create('Locale', 'Locale', $locales)
    			->setEmptyString('Not Listed'),
            $gridField
    	);
    }
}
<?php


/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 */

class HeroSlide extends DataObject {
	
	private static $db = array(
		'Title' => 'Text',
		'Description' => 'Text',
        'Button1Text' => 'Text',
        'Button2Text' => 'Text'
    );

    private static $has_one = array(
        'Page' => 'Page',
    	'Button1URL' => 'SiteTree',
        'Button2URL' => 'SiteTree',
        'Image' => 'Image'
    );

	public function getCMSFields() {
		return new FieldList(
        	new TextField('Title'),
            new UploadField('Image'),
        	new TextAreaField('Description'),
        	new TextField('Button1Text', 'Button 1 Text'),
        	new TreeDropdownField("Button1URLID", "Button 1 Link", "SiteTree"),
        	new TextField('Button2Text', 'Button 2 Text'),
            new TreeDropdownField("Button2URLID", "Button 2 Link", "SiteTree")
    	);
	}
}
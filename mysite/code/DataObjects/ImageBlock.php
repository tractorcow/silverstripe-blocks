<?php
/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 */

class ImageBlock extends TextBlock {
	
	private static $db = array(
		'LinkText' => 'Text',
		'LinkURL' => 'Text',
    );

    //private static $default_sort = '"SortOrder" ASC';

    private static $has_one = array(
    	'SiteTreeURL' => 'SiteTree',
        'Image' => 'Image',
    );

	public function getCMSFields() {
		return new FieldList(
        	new TextField('Title'),
            new UploadField('Image'),
            new HeaderField('Optional', 'Optional Fields'),
            new TextAreaField('Content'),
            new TextField('LinkText'),
            new TreeDropdownField("SiteTreeURLID", "Choose a page to which to link", "SiteTree")
    	);
	}
}
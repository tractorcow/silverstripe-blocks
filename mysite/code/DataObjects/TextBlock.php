<?php
/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 */

class TextBlock extends ContentBlock {
	
	private static $db = array(
		'LinkText' => 'Text',
		'LinkURL' => 'Text',
    );

    //private static $default_sort = '"SortOrder" ASC';

    private static $has_one = array(
    	'SiteTreeURL' => 'SiteTree'
    );

	public function getCMSFields() {
		return new FieldList(
        	new TextField('Title'),
        	new TextAreaField('Content'),
        	new TextField('LinkText'),
        	new TreeDropdownField("SiteTreeURLID", "Choose a page to which to link", "SiteTree")
    	);
	}
}
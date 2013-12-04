<?php


/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 * "What can we do for you" module that appears across the bottom of pages
 */

class FooterModule extends DataObject {
	
	private static $db = array(
		'Title' => 'Text',
		'Description' => 'Text',
		'LinkText' => 'Text',
		'LinkURL' => 'Text',
    );

    //private static $default_sort = '"SortOrder" ASC';

    private static $has_one = array(
    	'SiteTreeURL' => 'SiteTree'
    );

    private static $belongs_many_many = array(
    	'Page' => 'Page'
    );

    public static $summary_fields = array( 
      'Title' => 'Title',
      'Description' => 'Description',
      'SortOrder' => 'Position',
    );

	public function getCMSFields() {
		return new FieldList(
        	new TextField('Title'),
        	new TextAreaField('Description'),
        	new TextField('LinkText'),
        	new TreeDropdownField("SiteTreeURLID", "Choose a page to which to link", "SiteTree"),
        	new TextField('SiteTreeURL', 'Link URL (if page not selected above)')
    	);
	}
}
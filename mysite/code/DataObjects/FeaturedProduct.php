<?php


/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 */

class FeaturedProduct extends DataObject {
	
	private static $db = array(
		'LinkText' => 'Text',
    );

    private static $has_one = array(
    	'SiteTreeURL' => 'SiteTree'
    );

    private static $belongs_many_many = array(
    	'Page' => 'Page'
    );

    public static $summary_fields = array( 
      'Title' => 'Title',
      'SortOrder' => 'Position',
    );

    public function getTitle(){
        return $this->SiteTreeURL()->Title;
    }

    // TODO: Change the dropdown so that it defaults to products
	public function getCMSFields() {
		return new FieldList(
        	new TreeDropdownField("SiteTreeURLID", "Choose a page to which to link", "SiteTree"),
            new TextField('LinkText')
    	);
	}
}
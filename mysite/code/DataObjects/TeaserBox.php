<?php
/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 * Teaser Boxes
 */

class TeaserBox extends DataObject {
	
	private static $db = array(
		'Title' => 'Text',
		'Description' => 'Text',
		'LinkText' => 'Text',
		'LinkURL' => 'Text',
        'PostScript' => 'Text',
        'TemplateLocation' => 'Int'
    );

    private static $belongs_many_many = array(
        'Page' => 'Page'
    );

    private static $has_one = array(
    	'SiteTreeURL' => 'SiteTree'
    );

	public function getCMSFields() {

		return new FieldList(
            new TextField('Title'),
            new TreeDropdownField("SiteTreeURLID", "Choose a page or section to which to link", "SiteTree"),
        	new TextAreaField('Description', 'Description - if not provided it will be pulled automatically from the linked page or section'),
            new TextField('PostScript'),
            new TextField('LinkText'),
        	new TextField('SiteTreeURL', 'Link URL (if page or section is not selected above)')
    	);
	}

    /* Get the description from the underlying page or section if one is not entered */
    /*public function getDescription() {
        if($this->SiteTreeURLID && empty($this->Description)){
            $page = Page::get()->byID($this->SiteTreeURLID);
            
            // If the page is a BlogHolder then get the latest article
            // otherwise display the abstract of that particular page
        }
    }*/
}
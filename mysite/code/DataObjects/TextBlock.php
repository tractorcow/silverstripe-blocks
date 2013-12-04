<?php
/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 */

class TextBlock extends ContentBlock {

    private static $singular_name = 'Text Block';
    private static $plural_name = 'Text Blocks';
	
	private static $db = array(
		'LinkText' => 'Text',
		'LinkURL' => 'Text',
    );

    //private static $default_sort = '"SortOrder" ASC';

    private static $has_one = array(
    	'SiteTreeURL' => 'SiteTree'
    );

	public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->removeByName('Content');
        $fields->removeByName('LinkText');
        $fields->removeByName('LinkURL');
        $fields->addFieldToTab('Root.Main', new TextAreaField('Content'), 'SiteTreeURLID');
        $fields->addFieldToTab('Root.Main', new TextField('LinkText'), 'SiteTreeURLID');
        return $fields;
	}
}
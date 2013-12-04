<?php
/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 */

class ImageBlock extends TextBlock {

    private static $singular_name = 'Image Block';
    private static $plural_name = 'Image Blocks';
	
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
        $fields = parent::getCMSFields();
        $fields->removeByName('Image');
        $fields->addFieldToTab('Root.Main', new UploadField('Image'), 'Content');
        $fields->addFieldToTab('Root.Main', new HeaderField('Optional','Optional Fields'), 'Content');
        return $fields;
	}
}
<?php
/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 * Blocks come in these varieties:
 * Basic - text, optional link, optional smallprint
 * Section - content automatically pulled from underlying section
 * Image - image with optional link
 * Content - WSIWYG
 * There are a couple of reused/static blocks: 
 * Warranty, Get in Touch Dealer Search, Get in Touch List
 * 
 */

class Block extends DataObject {
	
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
}
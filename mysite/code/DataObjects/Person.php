<?php
/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 */

class Person extends DataObject {
	private static $db = array(
		'Title' => 'Varchar',
		'Description' => 'Text',
		'AdditionalInfo' => 'Text',
    );

    private static $has_one = array(
    	'Image' => 'Image',
    	'Page' => 'Page',
    );
}
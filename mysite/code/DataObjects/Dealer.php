<?php
/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 */

class Dealer extends DataObject {
	private static $db = array(
		'Title' => 'Varchar',
		'Phone' => 'Varchar(20)',
		'Email' => 'Varchar(50)',
		'Address' => 'Text',
		'Contact' => 'Varchar(50)',
		'Country' => 'Varchar(20)',
		'Region' => 'Varchar(20)',
    );

    private static $has_one = array(
    	'DealerListing' => 'DealerListing',
    );
}
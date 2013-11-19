<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages
 */
class HomePage extends Page {

	// Teaser box locations for this page's template
	private $teaser_locations = array(
		'Hero Teaser', 
		'Teaser with Image', 
		'Bottom Teaser 1',
		'Bottom Teaser 2'
	);

	// BottomSlider is just a futureproofing element in case they want to use sections other than
	// case studies in the future
	private static $has_one = array(
		'SecondarySlider' => 'SiteTree'
	);

	private static $many_many = array(
		'TeaserBox' => 'TeaserBox',
	);

	public function getCMSFields(){
    	$fields = parent::getCMSFields();
    	$config = GridFieldConfig_Custom::create();
    	// Grid Edit Form
    	// Find Component by name
    	$gridField = new GridField('TeaserBox', 'TeaserBox', $this->TeaserBox(), $config);
    	$fields->addFieldToTab("Root.TeaserBoxes", $gridField);
    	return $fields;
    }

    public function getTeaserLocations(){
    	return $this->teaser_locations;
    }
}

class HomePage_Controller extends Page_Controller {	

	/*
		Gets the slides for the secondary slider across the bottom of the template.
		At the moment, this is just case studies.
	*/
	public function getSecondarySlides(){
		$sectionClass = 'CaseStudy';
		return $sectionClass::get()->filter(array('ShowOnHomePage' => '1'));

		// Return a datalist which contains:
		// Section title
		// Section slides (Intro, Abstract, Link, Image)
	}
}
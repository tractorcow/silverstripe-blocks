<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages
 */
class HomePage extends Page {

	// BottomSlider is just a futureproofing element in case they want to use sections other than
	// case studies in the future
	private static $has_one = array(
		'SecondarySlider' => 'SiteTree'
	);

	private static $many_many = array(
		'FeaturedProducts' => 'FeaturedProduct',
	);

	private static $has_many = array(
		'HeroSlides' => 'HeroSlide'
	);

	private static $many_many_extraFields = array(
		'FeaturedProducts' => array(
			'SortOrder' => 'Int'
		)
	);

	public function getCMSFields(){
    	$fields = parent::getCMSFields();
    	$config = GridFieldConfig_Custom::create();
    	$fields->removeByName("MainImage");

    	// Hero Slides
    	$fields->insertBefore(new Tab('HeroSlides'), 'WhatCanWeDoForYou');
    	$gridField = new GridField('HeroSlides', 'HeroSlides', $this->HeroSlides(), $config);
    	$fields->addFieldToTab("Root.HeroSlides", $gridField);

    	// Featured Products
    	$config = GridFieldConfig_Custom::create();
    	$config->addSortable('SortOrder');
    	$config->addRelationHandling();
    	$fields->insertBefore(new Tab('FeaturedProducts'), 'WhatCanWeDoForYou');
    	$gridField = new GridField('FeaturedProducts', 'FeaturedProducts', $this->FeaturedProducts(null, 'SortOrder'), $config);
    	$fields->addFieldToTab("Root.FeaturedProducts", $gridField);

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
<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages
 *
 * Underlying sections of an Expanded Content Page
 *
 */

class ExpandedContentSection extends Page {

  private static $db = array(
    "ImageAlign" => "Enum(array('Left', 'Right'))"
    );


  private static $many_many = array(
  	"ContentImages" => "Image"
    );

  	// Match menu title to page name
  	public function onAfterWrite(){
  		parent::onAfterWrite();
  		$this->MenuTitle = $this->Title;
  	}

  public function getGridSize(){
    return $this->ContentImages()->Count();
  }

  public function getCMSFields(){
    $fields = parent::getCMSFields();

    $dropdown = new DropdownField(
      'ImageAlign',
      'Image Alignment',
      singleton('ExpandedContentSection')->dbObject('ImageAlign')->enumValues()
    );

    $fields->addFieldToTab("Root.Main", $dropdown, 'Content');
    $fields->addFieldToTab("Root.Images", new UploadField('ContentImages', 'Upload up to 4 images'));

    // Remove all the fields
    $fields->removeFieldFromTab("Root.Main","URLSegment");
    $fields->removeFieldFromTab("Root.Main","MenuTitle");
    $fields->removeByName("WhatCanWeDoForYou");
    $fields->removeByName("GoogleAnalytics");
    $fields->removeByName("Metadata");

    return $fields;
  }  
}

class ExpandedContentSection_Controller extends Page_Controller {	

  public function init() {
    parent::init();

		// Redirect to parent page if accessed directly
  }

}

class ContentImageExtension extends DataExtension {
	private static $db = array(
		'TestText' => 'Text'
   );

  private static $belongs_many_many = array('ContentSection' => 'ExpandedContentSection');
}
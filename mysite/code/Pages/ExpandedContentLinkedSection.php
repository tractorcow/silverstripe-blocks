<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage pages
 *
 * Linked section of an Expanded Content Page - list articles/content
 * within the section to which it is linked
 *
 */

class ExpandedContentLinkedSection extends ExpandedContentSection {
	public function getCMSFields(){
    	$fields = parent::getCMSFields();
    	$fields->removeByName("Images");
    	return $fields;
    }
}

class ExpandedContentLinkedSection_Controller extends ExpandedContentSection_Controller {	

}
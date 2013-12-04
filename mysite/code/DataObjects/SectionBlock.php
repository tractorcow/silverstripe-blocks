<?php
/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 */

class SectionBlock extends TextBlock {

    private static $singular_name = 'Section Block';
    private static $plural_name = 'Section Blocks';

    // Get the latest blog entry under this section
    // Add the filters for the parent holder
    public function getSection(){
        $page = $this->SiteTreeURL();
        $entry = BlogEntry::get()->First();
        return $entry;
    }

    public function getSectionTitle(){
        return $this->SiteTreeURL()->Title;
    }

    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->removeByName('Content');
        return $fields;
    }
}
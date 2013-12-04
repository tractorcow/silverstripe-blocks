<?php
/**
 * @author Priya
 * 
 * @package Giltrap Engineered Performance
 * @subpackage dataobjects
 *
 */

class MediaItem extends DataObject {
	
	private static $db = array(
		'Title' => 'Text',
		'Description' => 'Text',
		'VideoEmbed' => 'Text',
        'Type' => 'Enum("Image, Embedded Video", "Image")',
    );

    private static $has_one = array(
    	'Image' => 'Image',
        'SiteTree' => 'SiteTree',
    );

	public function getCMSFields() {
        $fields = new FieldList();
        
        $dropDown = new DropdownField(
                'Type',
                'Type', 
                $this->dbObject('Type')->enumValues()
        );

        $fields->push($dropDown);
		$fields->push(new TextField('Title'));
        $fields->push(new TextAreaField('Description'));

        switch ($this->Type){
            case 'Image':
                $fields->push(new UploadField('Image'));
                break;
            case 'Embedded Video':
                $fields->push(new TextAreaField('VideoEmbed', 'Video Embed Code'));
                break;
        } 
        
        return $fields;
	}
}
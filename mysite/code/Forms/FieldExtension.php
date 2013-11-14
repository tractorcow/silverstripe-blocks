<?php

class FieldExtension extends Extension {
	public function setPlaceholder($text) {
		return $this
			->owner
			->setAttribute('data-placeholder', $text)
			->setAttribute('placeholder', $text);
	}
}

<?php
/**
 * @author prij
 * 
 * @package giltrap
 * @subpackage admin
 *
 *
 */

class MyAdmin extends ModelAdmin {
  private static $managed_models = array('AddressCountry');
  private static $url_segment = 'address-countries';
  static $menu_title = 'Address Countries';
}
<?php

/**
 * mgGallery components.
 *
 * @package    magic
 * @subpackage mgGallery
 * @author     Damian Suarez
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mgGalleryComponents extends sfComponents
{
  public function executeUl_gallery() {
    if(!isset($this->options)) $this->options = array();
    if(!array_key_exists('type', $this->options)) $this->options['type'] = 'box';
    if(!isset($this->mg_gallery)) throw new Exception('The $mg_gallery object is necessary.');
  }
}
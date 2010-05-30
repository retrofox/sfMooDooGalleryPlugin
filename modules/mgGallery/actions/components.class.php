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
    if(!isset($this->mg_gallery)) throw new Exception('The $mg_gallery object is necessary.');
  }
}
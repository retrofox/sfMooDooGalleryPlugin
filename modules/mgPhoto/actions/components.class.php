<?php

/**
 * mgPhoto components.
 *
 * @package    magic
 * @subpackage mgPhoto
 * @author     Damian Suarez
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mgPhotoComponents extends sfComponents
{
  public function executeLi_photo() {
    if(!isset($this->options)) $this->options = array();

    if(!array_key_exists('size', $this->options)) $this->options['size'] = 'tiny';

    if(!isset($this->mg_photo)) throw new Exception('The $mg_photo object is necessary.');
  }
}

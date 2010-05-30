<?php

/**
 * PluginMGPhoto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7380 2010-03-15 21:07:50Z jwage $
 */
abstract class PluginMGPhoto extends BaseMGPhoto
{
  public function __toString() {
    return $this->getTitle();
  }

  public function getPhotoBySize($size = null) {
    if(is_null($size)) return $this->getPhoto();
    else {
      if(is_file(sfConfig::get('app_sfMooDooGalleryPlugin_upload_dir').DIRECTORY_SEPARATOR.$this->getPhoto())){
      
      $sizes = sfConfig::get('app_sfMooDooGalleryPlugin_image_size');
      $size = $sizes[$size];

      $filename = explode('.', $this->getPhoto());
      $filename = $filename[0].'_'.$size['width'].'x'.$size['height'].'.'.$filename[1];

      if(file_exists(sfConfig::get('app_sfMooDooGalleryPlugin_images_dir').DIRECTORY_SEPARATOR.$filename)) return $filename;
      else return null;
      }
      else return null;
    }
  }

  public function getPhotoStringDims($size = null) {
    $sizes = sfConfig::get('app_sfMooDooGalleryPlugin_image_size');
    $size = $sizes[$size];
    return $size['width'].'x'.$size['height'];
  }

  public function getPhotoPreview() {
    if(!is_null($this->getPhotoBySize('preview'))) return '/images/mooDooGallery'.DIRECTORY_SEPARATOR.$this->getPhotoBySize('preview');
  }
}
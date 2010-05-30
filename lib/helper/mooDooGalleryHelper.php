<?php

function mdg_photo_tag($size = 'tiny', $objMDGallery)
{
  $img_name = is_null($objMDGallery->getPhotoBySize($size)) ? '/sfMooDooGalleryPlugin/images/'.sfConfig::get('app_sfMooDooGalleryPlugin_no_image_name').$objMDGallery->getPhotoStringDims($size).'.png' : 'mooDooGallery/'.$objMDGallery->getPhotoBySize($size);
  $dims = explode('_', $img_name);
  return image_tag($img_name, array('title'=>$objMDGallery, 'alt' => $objMDGallery, 'size' => $objMDGallery->getPhotoStringDims($size)));
}
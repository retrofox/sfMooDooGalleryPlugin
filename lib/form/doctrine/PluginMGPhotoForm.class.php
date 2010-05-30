<?php

/**
 * PluginMGPhoto form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginMGPhotoForm extends BaseMGPhotoForm
{
  public function setupInheritance()
  {
    parent::setupInheritance();
    unset($this['created_at'], $this['updated_at'], $this['author_id']);

    $this->widgetSchema['photo'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Photo',
      'file_src' => $this->getObject()->getPhotoPreview(),
      'is_image' => true,
      'edit_mode' => !$this->isNew(),
      'template' => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
    ));

    $this->validatorSchema['photo'] = new sfValidatorFile(array(
      'required' => $this->isNew() ? true : false,
      'path'       => sfConfig::get('app_sfMooDooGalleryPlugin_upload_dir'),
      'mime_types' => 'web_images',
    ));
  }

  protected function saveFile($field, $filename = null, sfValidatedFile $file = null){
    $file_saved = parent::saveFile($field, $filename = null, $file);

    // generate images ?
    if(sfConfig::get('app_sfMooDooGalleryPlugin_generate_images')) {
      $sizes = sfConfig::get('app_sfMooDooGalleryPlugin_image_size');

      $name = explode('.', $file_saved);

      foreach ($sizes as $size) {
        $image_name = sfConfig::get('app_sfMooDooGalleryPlugin_images_dir').DIRECTORY_SEPARATOR.$name[0].'_'.$size['width'].'x'.$size['height'].$file->getExtension();
        $img = new sfImage($file, $file->getType());
        $img->resize($size['width'],$size['height']);
        $img->saveAs($image_name);
      }
    }

    return $file_saved;
  }
}

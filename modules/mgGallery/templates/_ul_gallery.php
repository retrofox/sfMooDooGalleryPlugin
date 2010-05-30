<?php use_helper('mooDooGallery') ?>
<ul>
  <?php foreach ($mg_gallery->getPhotos() as $mg_photo) : ?>
  <?php include_component('mgPhoto', 'li_photo', array('mg_photo' => $mg_photo, 'options' => $options)) ?>
  <?php endforeach; ?>
</ul>
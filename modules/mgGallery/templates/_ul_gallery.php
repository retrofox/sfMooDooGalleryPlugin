<?php use_helper('mooDooGallery') ?>
<ul class="mg_gallery gallery-<?php echo $mg_gallery->get('id') ?>">
  <li>
    <h2><?php echo $mg_gallery ?></h2>
    <p><?php echo $mg_gallery->getDescription() ?></p>
    <ul>
      <?php foreach ($mg_gallery->getPhotos() as $mg_photo) : ?>
      <?php if($options['type'] == 'box') : ?>
        <?php include_component('mgPhoto', 'li_photo_box', array('mg_photo' => $mg_photo, 'options' => $options)) ?>
      <?php else: ?>
        <?php include_component('mgPhoto', 'li_photo', array('mg_photo' => $mg_photo, 'options' => $options)) ?>
      <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <div class="clear"></div>
  </li>
</ul>
<?php use_helper('mooDooGallery') ?>
<?php if($addMooCore) : ?>
  <?php use_javascript('/sfMooDooGalleryPlugin/js/moo/mootools-1.2.4-core-yc.js', 'last') ?>
<?php endif; ?>

<?php if($addMooMore) : ?>
  <?php use_javascript('/sfMooDooGalleryPlugin/js/moo/mootools-1.2.4.4-more-yc.js', 'last') ?>
<?php endif; ?>

<?php if($addMilkbox) : ?>
  <?php use_stylesheet('/sfMooDooGalleryPlugin/css/milkbox/milkbox.css', 'last') ?>
  <?php use_javascript('/sfMooDooGalleryPlugin/js/milkbox/milkbox-yc.js', 'last') ?>
<?php endif; ?>


<ul class="mg_gallery gallery-<?php echo $mg_gallery->get('id') ?>">
  <li>
    <h2><?php echo $mg_gallery ?></h2>
    <p><?php echo $mg_gallery->getDescription() ?></p>
    <ul>
      <?php foreach ($mg_gallery->getPhotos() as $mg_photo) : ?>
      <?php if($options['type'] == 'box') : ?>
        <?php include_component('mgPhoto', 'li_photo_box', array('mg_photo' => $mg_photo, 'options' => $options, 'mg_gallery' => $mg_gallery)) ?>
      <?php else: ?>
        <?php include_component('mgPhoto', 'li_photo', array('mg_photo' => $mg_photo, 'options' => $options)) ?>
      <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <div class="clear"></div>
  </li>
</ul>
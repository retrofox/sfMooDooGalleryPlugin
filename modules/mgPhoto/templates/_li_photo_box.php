<li class="mg_photo photo-<?php echo $mg_photo->get('id') ?>">
  <h3><?php echo $mg_photo ?></h3>
  <div class="image">
    <a href="/uploads/mooDooGallery/<?php echo $mg_photo->getPhoto() ?>"><?php echo mdg_photo_tag($options['size'], $mg_photo) ?></a>
  </div>
  <p>
    <?php echo $mg_photo->getDescription() ?>
  </p>
</li>
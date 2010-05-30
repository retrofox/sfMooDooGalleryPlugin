<?php use_helper('mooDooGallery') ?>
<h1>Mg photos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Author</th>
      <th>Title</th>
      <th>IMG getPhotoBySize</th>
      <th>getPhotoBySize</th>
      <th>Description</th>
      <th>Photo</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mg_photos as $mg_photo): ?>
    <tr>
      <td><a href="<?php echo url_for('mgPhoto/edit?id='.$mg_photo->getId()) ?>"><?php echo $mg_photo->getId() ?></a></td>
      <td><?php echo $mg_photo->getAuthorId() ?></td>
      <td><?php echo mdg_photo_tag('tiny', $mg_photo)  ?></td>
      <td><?php echo $mg_photo->getPhotoBySize('tiny')  ?></td>
      <td><?php echo $mg_photo->getTitle() ?></td>
      <td><?php echo $mg_photo->getDescription() ?></td>
      <td><?php echo $mg_photo->getPhoto() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('mgPhoto/new') ?>">New</a>

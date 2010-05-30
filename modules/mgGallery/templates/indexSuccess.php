<h1>Mg gallerys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Album</th>
      <th>Author</th>
      <th>Title</th>
      <th>Description</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mg_gallerys as $mg_gallery): ?>
    <tr>
      <td><a href="<?php echo url_for('mgGallery/edit?id='.$mg_gallery->getId()) ?>"><?php echo $mg_gallery->getId() ?></a></td>
      <td><?php echo $mg_gallery->getAlbumId() ?></td>
      <td><?php echo $mg_gallery->getAuthorId() ?></td>
      <td><?php echo $mg_gallery->getTitle() ?></td>
      <td><?php echo $mg_gallery->getDescription() ?></td>
      <td><?php echo $mg_gallery->getCreatedAt() ?></td>
      <td><?php echo $mg_gallery->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('mgGallery/new') ?>">New</a>

<h1>Mg gallerys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mg_gallerys as $mg_gallery): ?>
    <tr>
      <td><a href="<?php echo url_for('mgGallery/edit?id='.$mg_gallery->getId()) ?>"><?php echo $mg_gallery->getId() ?></a></td>
      <td><?php echo $mg_gallery->getTitle() ?></td>
      <td><?php echo $mg_gallery->getDescription() ?></td>
    </tr>
    <tr>
      <td colspan="3">
        <pre>include_component('mgGallery', 'ul_gallery', array('mg_gallery' => $mg_gallery, 'options' => array('size' => 'preview')))</pre>
        <?php include_component('mgGallery', 'ul_gallery', array('mg_gallery' => $mg_gallery, 'options' => array('size' => 'preview'))) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<a href="<?php echo url_for('mgGallery/new') ?>">New</a>

<?php use_helper('mooDooGallery') ?>
<h1>Mg photos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Tiny</th>
      <th>Title</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mg_photos as $mg_photo): ?>
    <tr>
      <td><a href="<?php echo url_for('mgPhoto/edit?id='.$mg_photo->getId()) ?>"><?php echo $mg_photo->getId() ?></a></td>
      <td><?php echo mdg_photo_tag('tiny', $mg_photo)  ?></td>
      <td><?php echo $mg_photo->getTitle() ?></td>
      <td><?php echo $mg_photo->getDescription() ?></td>
    </tr>
    <tr>
      <td colspan="5">
        <ul>
          <li><pre>include_component('mgPhoto', 'li_photo', array('mg_photo' => $mg_photo, 'options' => array('size' => 'preview')))</pre></li>
          <?php include_component('mgPhoto', 'li_photo', array('mg_photo' => $mg_photo, 'options' => array('size' => 'preview'))) ?>
        </ul>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('mgPhoto/new') ?>">New</a>

<?php use_helper('Date') ?>
<h1>Planet</h1>
<br/>
<?php foreach($feed->getItems() as $key=>$post): ?>
  <li id="news<?php echo $key ?>" style="list-style-type: none;">
    <div class='view-item view-item-bloque-noticias'>
      <div class='view-field view-data-node-title'>

      <h3><?php echo link_to($post->getTitle(), $post->getLink()) ?></h3>
      </div>
      <div class='view-field view-data-node-created'>
        <strong><?php echo format_date($post->getPubDate(), 'd-MM-yyyy') ?></strong>
      </div>
      <div class="planet-p" style="padding-bottom: 10px; padding-top: 5px;">
        <?php echo $post->getDescription(ESC_RAW) ?>
      </div>
    </div>
  </li>
<?php endforeach; ?>
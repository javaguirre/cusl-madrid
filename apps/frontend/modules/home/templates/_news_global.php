<?php use_helper('Date') ?>
<script type="text/javascript" src="/js/behaviour.js"></script>
<h2 class="title">Noticias del Concurso General</h2>
<ul id="ul-news-global">
  <?php foreach($feed->getItems() as $key=>$post): ?>
  <li id="news<?php echo $key ?>">
    <div class='view-item view-item-bloque-noticias'>
      <div class='view-field view-data-node-title'>

      <?php echo link_to($post->getTitle(), $post->getLink()) ?>
      </div>
      <div class='view-field view-data-node-created'>
        <?php echo format_date($post->getPubDate(), 'd-MM-yyyy') ?>
      </div>
    </div>
  </li>
  <?php endforeach; ?>
  <a href="#" id="link-more-news">Más Noticias</a>
  <br />
</ul>
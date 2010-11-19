<?php use_helper('Date') ?>
  <h2 class="title">Últimas noticias</h2>
    <ul>
    <?php foreach($entrys as $entry ): ?>
      <li>
        <div class='view-item view-item-bloque-noticias'>
          <div class='view-field view-data-node-title'>
            <a href="<?php echo url_for('entry/show')?>?id=<?php echo $entry->getId() ?>&slug=<?php echo $entry->getSlug() ?>">
              <?php echo $entry->getTitle() ?>
            </a>
          </div>
          <div class='view-field view-data-node-created'>
            <?php echo format_date($entry->getCreatedAt(), 'dd-MM-yyyy') ?>
          </div>
        </div>
      </li>
    <?php endforeach; ?>

    </ul>
    <div class='view-footer view-footer-bloque-noticias'>
      <div style="line-height: 14px; margin-top: 20px;">
        <img src="/images/frontend/rss.png" /> <a href="<?php echo url_for('entry/rss') ?>">RSS CUSL Madrid</a>
        <br/>
        <img src="/images/frontend/rss.png" /> <a href="<?php echo url_for('entry/feed') ?>">Atom CUSL Madrid </a>
      </div>
    </div>
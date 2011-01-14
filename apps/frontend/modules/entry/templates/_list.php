<?php use_helper('Date') ?>
  <h2 class="title">Últimas noticias</h2>
    <ul>
    <?php foreach($entrys as $entry ): ?>
      <li>
        <div class='view-item view-item-bloque-noticias'>
          <div class='view-field view-data-node-title'>
            <a href="<?php echo url_for('entry_show', $entry)?>">
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
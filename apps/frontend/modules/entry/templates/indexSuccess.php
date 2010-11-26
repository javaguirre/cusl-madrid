<?php echo use_helper('Date') ?>
<h1>Noticias</h1>
<div class="node"><div class="content">
<div class='view view-noticias'>
  <div class='view-header view-header-noticias'><p>Aquí podrás consultar las últimas noticias sobre el <strong>V Concurso Universitario de Software Libre</strong>.</p>
</div>

  <div class='view-content view-content-noticias'>
    <div class="node">
      <?php foreach($entrys as $entry): ?>
        <h2 class="title"><a href="<?php echo url_for('entry_show', $entry)?>"><?php echo $entry->getTitle() ?></a></h2>
        <span class="submitted"><?php echo format_date($entry->getCreatedAt(), 'dd-MM-yyyy') ?></span>
        <span class="taxonomy"></span>
        <div class="content">
          <?php echo $entry->getText(ESC_RAW) ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

</div></div>
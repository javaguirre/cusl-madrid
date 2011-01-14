<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head>
    <title>Concurso Universitario de Software Libre de Madrid</title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <link rel="alternate" type="application/rss+xml" title="CUSL Madrid Feed" href="<?php echo url_for('entry/rss') ?>" />
    <link rel="alternate" type="application/atom+xml" title="CUSL Madrid Atom" href="<?php echo url_for('entry/feed') ?>" />
  </head>
  <body>
    <div class="main">
      <?php include_partial('home/login') ?>
      <a href="<?php echo url_for('home/index') ?>" class="banner"><img src="/images/frontend/logomadrid.png" alt="Concurso Universitario de Software Libre"/></a>
        <?php include_partial('home/menu') ?>
      <div id="sidebar-right">
        <div class="block block-block">
          <h2 class="title">Síguenos</h2>
          <img src="/images/frontend/rss.png" /> <a href="<?php echo url_for('entry/rss') ?>">RSS CUSL Madrid</a><br/>
          <img src="/images/frontend/rss.png" /> <a href="<?php echo url_for('entry/feed') ?>">Atom CUSL Madrid</a>
        </div>
        <div class="block block-block" id="block-block-18">
          <h2 class="title">Patrocinio</h2>
          <div class="content"><p><strong>¿Quiere Patrocinar?</strong></p>
            <p>Envíanos un correo a contacto <strong>EN</strong> concursosoftwarelibre <strong>PUNTO</strong> org</p>
          </div>
        </div>
        <?php include_partial('home/sponsors') ?>
      </div>
      <div id="content" class="big">
          <?php include_partial('home/notifications') ?>
          <?php echo $sf_content ?>
      </div>
    </div>
    <?php include_partial('home/footer') ?>
  </body>
</html>

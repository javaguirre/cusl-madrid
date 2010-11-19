<?php use_helper('I18N', 'Date') ?>
<?php include_partial('entry/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Entry', array(), 'messages') ?></h1>

  <?php include_partial('entry/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('entry/form_header', array('Entry' => $Entry, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('entry/form', array('Entry' => $Entry, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('entry/form_footer', array('Entry' => $Entry, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

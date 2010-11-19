<?php use_helper('I18N', 'Date') ?>
<?php include_partial('evaluation/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Evaluation', array(), 'messages') ?></h1>

  <?php include_partial('evaluation/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('evaluation/form_header', array('Evaluation' => $Evaluation, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('evaluation/form', array('Evaluation' => $Evaluation, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('evaluation/form_footer', array('Evaluation' => $Evaluation, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

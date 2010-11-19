<?php use_helper('I18N', 'Date') ?>
<?php include_partial('eval_type/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Eval type', array(), 'messages') ?></h1>

  <?php include_partial('eval_type/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('eval_type/form_header', array('EvalType' => $EvalType, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('eval_type/form', array('EvalType' => $EvalType, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('eval_type/form_footer', array('EvalType' => $EvalType, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

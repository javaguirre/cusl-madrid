<?php use_helper('I18N', 'Date') ?>
<?php include_partial('eval_question/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Eval question', array(), 'messages') ?></h1>

  <?php include_partial('eval_question/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('eval_question/form_header', array('EvalQuestion' => $EvalQuestion, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('eval_question/form', array('EvalQuestion' => $EvalQuestion, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('eval_question/form_footer', array('EvalQuestion' => $EvalQuestion, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>

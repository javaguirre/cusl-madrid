<?php use_helper('I18N', 'Date') ?>
<?php include_partial('project/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Project List', array(), 'messages') ?></h1>

  <?php include_partial('project/flashes') ?>
  <?php include_partial('project/chart', array('grafica' => $grafica)) ?>
  <div id="sf_admin_header">
    <?php include_partial('project/list_header', array('pager' => $pager)) ?>
  </div>


  <div id="sf_admin_content">
    <?php include_partial('project/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('project/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('project/list_actions', array('helper' => $helper)) ?>
    </ul>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('project/list_footer', array('pager' => $pager)) ?>
  </div>
</div>

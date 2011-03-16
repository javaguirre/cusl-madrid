<td>
  <ul class="sf_admin_td_actions">
    <?php if($sf_user->hasCredential('admin')): ?>
        <li class="sf_admin_action_edit">
        <?php echo link_to(__('Edit', array(), 'messages'), 'project/ListEdit?id='.$Project->getId(), array()) ?>
        </li>
        <li class="sf_admin_action_delete">
        <?php echo link_to(__('Delete', array(), 'messages'), 'project/ListDelete?id='.$Project->getId(), array()) ?>
        </li>
    <?php endif; ?>
    <li class="sf_admin_action_choose">
      <?php echo link_to(__('Choose', array(), 'messages'), 'project/ListChoose?id='.$Project->getId(), array()) ?>
    </li>
    <li class="sf_admin_action_choose">
      <?php if($Project->hasJury()): ?>
        <a href="<?php echo url_for('evaluation/eval') ?>?id=<?php echo $Project->getId() ?>">Evaluate</a>
      <?php endif; ?>
    </li>
  </ul>
</td>

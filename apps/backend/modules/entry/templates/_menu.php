<ul id="nav">
  <li><a href="<?php echo url_for('sf_guard_user')?>">Users</a></li>
  <li><a href="<?php echo url_for('sf_guard_permission')?>">Permissions</a></li>
  <li><a href="<?php echo url_for('entry')?>">Posts</a></li>
  <li><a href="<?php echo url_for('project') ?>">Projects</a></li>
  <li><a href="<?php echo url_for('participant') ?>">Participants</a></li>
  <li><a href="<?php echo url_for('jury') ?>">Jury</a></li>
  <li><a href="<?php echo url_for('project_jury') ?>">ProjectJury</a></li>
  <li><a href="<?php echo url_for('eval_type') ?>">Evaluation Types</a></li>
  <li><a href="<?php echo url_for('eval_question') ?>">Evaluation Questions</a></li>
  <li><a href="<?php echo url_for('evaluation') ?>">Evaluation</a></li>
  <li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
</ul>
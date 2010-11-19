<?php if ($sf_user->hasFlash('notice')): ?>
  <div class="msg msg-ok"><?php echo $sf_user->getFlash('notice') ?></div>
<?php endif ?>

<?php if ($sf_user->hasFlash('error')): ?>
  <div class="msg msg-error"><?php echo $sf_user->getFlash('error') ?></div>
<?php endif ?>
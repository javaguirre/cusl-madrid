<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($EvalQuestion->getId(), 'eval_question_edit', $EvalQuestion) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $EvalQuestion->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_point">
  <?php echo $EvalQuestion->getPoint() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_eval_type_id">
  <?php echo $EvalQuestion->getEvalTypeId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_comment">
  <?php echo $EvalQuestion->getComment() ?>
</td>

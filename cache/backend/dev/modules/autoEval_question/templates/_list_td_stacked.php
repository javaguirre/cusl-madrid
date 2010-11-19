<td colspan="5">
  <?php echo __('%%id%% - %%name%% - %%point%% - %%eval_type_id%% - %%comment%%', array('%%id%%' => link_to($EvalQuestion->getId(), 'eval_question_edit', $EvalQuestion), '%%name%%' => $EvalQuestion->getName(), '%%point%%' => $EvalQuestion->getPoint(), '%%eval_type_id%%' => $EvalQuestion->getEvalTypeId(), '%%comment%%' => $EvalQuestion->getComment()), 'messages') ?>
</td>

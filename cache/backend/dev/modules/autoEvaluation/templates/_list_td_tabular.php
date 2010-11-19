<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($Evaluation->getId(), 'evaluation_edit', $Evaluation) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_devel">
  <?php echo $Evaluation->getDevel() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_finished">
  <?php echo $Evaluation->getFinished() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_doc">
  <?php echo $Evaluation->getDoc() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_community">
  <?php echo $Evaluation->getCommunity() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_comment">
  <?php echo $Evaluation->getComment() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_finished_form">
  <?php echo get_partial('evaluation/list_field_boolean', array('value' => $Evaluation->getFinishedForm())) ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($Evaluation->getCreatedAt()) ? format_date($Evaluation->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($Evaluation->getUpdatedAt()) ? format_date($Evaluation->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_project_jury_id">
  <?php echo $Evaluation->getProjectJuryId() ?>
</td>

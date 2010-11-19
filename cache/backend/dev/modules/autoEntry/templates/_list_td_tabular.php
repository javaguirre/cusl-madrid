<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo link_to($Entry->getTitle(), 'entry_edit', $Entry) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_text">
  <?php echo $Entry->getText() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($Entry->getCreatedAt()) ? format_date($Entry->getCreatedAt(), "f") : '&nbsp;' ?>
</td>

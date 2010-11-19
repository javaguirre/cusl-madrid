<td colspan="3">
  <?php echo __('%%title%% - %%text%% - %%created_at%%', array('%%title%%' => link_to($Entry->getTitle(), 'entry_edit', $Entry), '%%text%%' => $Entry->getText(), '%%created_at%%' => false !== strtotime($Entry->getCreatedAt()) ? format_date($Entry->getCreatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>

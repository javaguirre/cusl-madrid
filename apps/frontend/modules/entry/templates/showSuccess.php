<?php use_helper('Date') ?>
<h1><?php echo $entry->getTitle() ?></h1>                                                                                <div class="node">
<span class="submitted"><?php echo format_date($entry->getCreatedAt(), 'dd-MM-yyyy') ?></span>
<span class="taxonomy"></span>

<div class="content"><?php echo $entry->getText(ESC_RAW) ?>

</div>
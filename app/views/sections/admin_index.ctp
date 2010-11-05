<div class="sections index">
<h2><?php __('NAFSA/NCAIE Section');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<br />
<table class="data" cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('visible');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($sections as $section):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $section['Section']['title']; ?>
		</td>
		<td>
			<?php echo $switches->onOff($section['Section']['visible']); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $section['Section']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $section['Section']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $section['Section']['title'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New', true), array('action'=>'add')); ?></li>
	</ul>
</div>

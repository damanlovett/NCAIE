<div class="positions index">
<h2><?php __('List of Positions');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<br />
<table class="data" cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('position');?></th>
	<th><?php echo $paginator->sort('visible');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($positions as $position):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $position['Position']['name']; ?>
		</td>
		<td>
			<?php echo $position['Position']['position']; ?>
		</td>
		<td>
			<?php echo $switches->onOff($position['Position']['visible']); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $position['Position']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $position['Position']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $position['Position']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $position['Position']['name'])); ?>
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
<div class="bottomactions">
	<ul>
		<li><?php echo $html->link(__('New Position', true), array('action'=>'add')); ?></li>
	</ul>
</div>
